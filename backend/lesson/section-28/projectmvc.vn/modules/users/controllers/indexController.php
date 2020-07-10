<?php

function construct()
{
    // echo "Dùng chung, load đầu tiên";
    load_model('index');
    load('lib', 'validation');
    load('lib', 'sendmail');
}

function loginAction()
{
    global $password, $username, $error;
    if (isset($_POST['btn-login'])) {
        $error = array();
        #Kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống Tên đăng nhập";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        #Kiểm tra passwordd
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống Mật khẩu";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }

        #Kết luận: kiểm tra user tồn tại chưa
        if (empty($error)) {
            if (check_login($username, $password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;

                redirect("?mod=home&action=index");
            } else {
                $error['account'] = "Username hoặc pass sai, cũng có thể là chưa tồn tại";
            }
        }
    }
    load_view('login');
}

function regAction()
{
    global $email, $password, $fullname, $username, $error;
    if (isset($_POST['btn-reg'])) {
        $error = array();
        # Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống Họ và tên";
        } else {
            $fullname = $_POST['fullname'];
        }
        #Kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống Tên đăng nhập";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        #Kiểm tra passwordd
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống Mật khẩu";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }
        #Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống Email";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }
        #Kết luận: kiểm tra user tồn tại chưa
        if (empty($error)) {
            if (!user_exists($username, $email)) {
                $active_token = md5($username . time());
                $data = array(
                    'active_token' => $active_token,
                    'username' => $username,
                    'fullname' => $fullname,
                    'email' => $email,
                    'password' => $password,
                );
                $link_active =  base_url("?mod=users&action=active&active_token={$active_token}");
                $content = "<p>Chào {$fullname}</p>
                <p>Bạn vui lòng click vào đường link sau đây để kích hoạt acc: {$link_active}</p>
                <p>về nương náu nhẹ gối đầu ngừng nỗi đau</p>
                <p>Nếu không phải bạn đăng kí thì hãy bỏ qua</p>";

                add_user($data);
                send_mail('doanphong.1413@gmail.com', 'ThưTZ', 'Kích hoạt tài khoản', $content);

                // redirect("?mod=users&controller=index&action=login");
            } else {
                $error['account'] = "Username hoặc Email đã tồn tại trong hệ thống";
            }
        }
    }

    load_view('reg');
}
function activeAction()
{
    $link_login = base_url("?mod=users&aciton=login");
    $active_token = $_GET['active_token'];
    if (check_active_token($active_token)) {
        active_user($active_token);

        echo "Đã kích hoạt thành công click vào <a href='{$link_login}'>đây</a> để đăng nhập";
    } else {
        echo "Yêu cầu kích hoạt không hợp lệ hoặc bạn đã kích hoạt trước đó rồi! <br>";
        echo "Click vào <a href='{$link_login}'>đây</a> để đăng nhập!";
    }
}
function logoutAction()
{
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect("?mod=users&action=login");
}
function resetAction()
{
    global $email, $password, $fullname, $username, $error;
    $reset_token = $_GET['reset_token'];
    if (!empty($reset_token)) {

        if (check_reset_token($reset_token)) {
            if (isset($_POST['btn-updatePass'])) {
                $error = array();
                #Kiểm tra passwordd
                if (empty($_POST['password'])) {
                    $error['password'] = "Không được để trống Mật khẩu";
                } else {
                    if (!is_password($_POST['password'])) {
                        $error['password'] = "Không đúng định dạng";
                    } else {
                        $password = md5($_POST['password']);
                    }
                }
                if (empty($error)) {
                    $data =  array(
                        'password' => $password
                    );
                    update_pass($data,  $reset_token);
                    redirect("?mod=users&action=resetok");
                }
            }
            load_view('newPass');
        } else {
            echo "Yêu cầu lấy lại  mật khẩu không hợp lệ";
        }
    } else {

        if (isset($_POST['btn-reset'])) {
            $error = array();
            #Kiểm tra email
            if (empty($_POST['email'])) {
                $error['email'] = "Không được để trống Email";
            } else {
                if (!is_email($_POST['email'])) {
                    $error['email'] = "Không đúng định dạng";
                } else {
                    $email = $_POST['email'];
                }
            }
            #Kết luận: kiểm tra user tồn tại chưa
            if (empty($error)) {
                if (check_email($email)) {
                    // Mã reset, insert mã này vào db để so sánh với mã đc gửi vào gmail
                    $reset_token = md5($email . time());
                    $data = array(
                        'reset_token' => $reset_token
                    );
                    update_reset_token($data, $email);
                    // Gửi mã khôi phục vào gmail user 

                    $link  = base_url("?mod=users&action=reset&reset_token={$reset_token}");
                    $content = "<p>Click vào link sau để khôi phục mật khẩu: {$link}</p>
                <p>Nếu không phải bạn yêu cầu, hãy bỏ qua</p>";
                    send_mail($email, '', 'Khôi phục mật khẩu', $content);
                } else {
                    $error['account'] = "Email không tồn tại trong hệ thống";
                }
            }
        }


        load_view('reset');
    }
}
function resetokAction()
{
    load_view('resetok');
}
