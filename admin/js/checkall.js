function checkall(class_name, obj)
{// biến là một mảng lưu giá trị của từng class_name
	var checks= document.getElementsByClassName(class_name);
	if (obj.checked == true) { // kiem tra trang thái checked cua doi tuong ojb
       for( i=0; i< checks.length; i++)	
    	checks[i].checked=true;

	}
}