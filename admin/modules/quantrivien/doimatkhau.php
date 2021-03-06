<script type="text/javascript">
	$(document).ready(function(){
		 var validator = $("#doimatkhau").validate({ 
        rules: { 
			matkhaucu: {
    			required:true,
   				remote:{   //gọi AJAX tương tự $.ajax của jquery
        	  url: "modules/quantrivien/kiemtramatkhau.php",// gọi đến trang kiểm tra username
        type: "post",
    } 
    },
			matkhaumoi: { 
                required: true, 
                minlength: 6, 
            }, 
            nhaplaimatkhau: { 
                equalTo: "#matkhaumoi" 
            }
        }, 
        messages: { 
			matkhaucu:{
            required:"Hãy điền  mật khẩu.", 
            remote:"Mật khẩu không trùng",// thông báo lỗi
    },
			 matkhaumoi: { 
                required: "Hãy điền mật khẩu", 
                minlength: "Mật khẩu ít nhất 6 ký tự"
            }, 
            nhaplaimatkhau: { 
                equalTo: "Mật khẩu xác nhận không chính xác" 
            }
        }
    }); 
})
</script>
<div class="panel panel-info">
      <div class="panel-heading"><img src="image/BlackBerry.png"> ĐỔI MẬT KHẨU</div>
          <div class="panel-body">
          <h4 style="color:#F00;">Đổi mật khẩu cho tài khoản <?php echo $_SESSION['tendangnhap']?></h4>
          		<form id="doimatkhau" action="modules/quantrivien/xulydoimatkhau.php" method="post">
                	<table>
                    	<tr>
                        	<td height="40"><span class="label label-primary">Mật khẩu cũ</span></td>
                          <td><input name="matkhaucu" type="password"></td>
                      </tr>
                        <tr>
                        	<td><span class="label label-primary">Mật khẩu mới</span></td>
                            <td><input name="matkhaumoi" type="password" id="matkhaumoi"></td>
                        </tr>
                        <tr>
                        	<td height="40"><span class="label label-primary">Nhập lại mật khẩu</span></td>
                            <td><input type="password" name="nhaplaimatkhau"></td>
                        </tr>
                    </table>
                     <div style="margin-top:10px;">
                            <button class="btn btn-primary" type="submit" name="doimatkhau"  style="margin:5px;" >Đổi mật khẩu</button><button class="btn btn-primary" type="reset" >Nhập lại</button></div>
                </form>	
          </div>
</div>
