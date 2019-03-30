
        function checkValidate() {
           
        
            //Tiến hành lấy dữ liệu trên Form
            var user = document.getElementById("txtUser").value;
            var pass = document.getElementById("txtPass").value;
            var email = document.getElementById("txtEmail").value;
            var mobile = document.getElementById("txtMobile").value;
            var passreset=document.getElementById("txtPassreset").value;
            
            var status = true; //Biến trạng thái

            //Kiểm tra Tên đăng nhập
            if (user == "") {
                //msg += "Tên đăng nhập không được phép để trống.\n";
                document.getElementById("txtUser").style.borderColor = "red";
                document.getElementById("lbUser").style.display = "block";
                document.getElementById("lbUser").innerHTML = "Tên đăng nhập không được để trống.";
                status = false;
            }else{
                document.getElementById("txtUser").style.borderColor = "#D8D8D8";
                document.getElementById("lbUser").style.display = "none";
            }

            // Kiểm tra Tên đăng nhập
            if (pass == "") {
                //msg += "Mật khẩu không được phép để trống.\n";
                document.getElementById("txtPass").style.borderColor = "red";
                document.getElementById("lbPass").style.display = "block";
                document.getElementById("lbPass").innerHTML = "Mật khẩu không được để trống.";
                status = false;
            }else{
                document.getElementById("txtPass").style.borderColor = "#D8D8D8";
                document.getElementById("lbPass").style.display = "none";
            }
            if(passreset == ""){
                document.getElementById("txtPassreset").style.borderColor="red";
                document.getElementById("lbPassreset").style.display="block";
                document.getElementById("lbPassreset").innerHTML="Yêu cầu nhập lại mật khẩu";
                status = false;
            }else{
                document.getElementById("txtPassreset").style.borderColor="#D8D8D8";
                document.getElementById("lbPassreset").style.display="none";
            }

            //Kiểm tra Địa chỉ Email
            var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (email == "") {
                document.getElementById("txtEmail").style.borderColor = "red";
                document.getElementById("lbEmail").style.display = "block";
                document.getElementById("lbEmail").innerHTML = "Email không được để trống.";
                status = false;
            }else{
                //Kiểm tra giá trị email có khớp với biểu thức RegExp
                if (re.test(email) == false) {
                    document.getElementById("txtEmail").style.borderColor = "red";
                    document.getElementById("lbEmail").style.display = "block";
                    document.getElementById("lbEmail").innerHTML = "Email không đúng định dạng";
                    status = false;
                }else{
                    document.getElementById("txtEmail").style.borderColor = "#D8D8D8";
                    document.getElementById("lbEmail").style.display = "none";
                }
            }
            
            //Kiểm tra Số điện thoại
            var mo = /^([0-9]{10,11})$/;
            if (mobile == "") {
                document.getElementById("txtMobile").style.borderColor = "red";
                document.getElementById("lbMobile").style.display = "block";
                document.getElementById("lbMobile").innerHTML = "SĐT không được để trống.";
                status = false;
            }else{
                if (mo.test(mobile) == false) {
                    document.getElementById("txtMobile").style.borderColor = "red";
                    document.getElementById("lbMobile").style.display = "block";
                    document.getElementById("lbMobile").innerHTML = "Số điện thoại không đúng định dạng";
                    status = false;
                }else{
                    document.getElementById("txtMobile").style.borderColor = "#D8D8D8";
                    document.getElementById("lbMobile").style.display = "none";
                }
            }

            // Kiểm tra biến trạng thái 'Lỗi' hay 'Không'
            if (status == true) { return true;}else{ return false; }
        
}

