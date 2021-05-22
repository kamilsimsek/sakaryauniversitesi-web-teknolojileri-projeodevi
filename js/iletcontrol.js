function control()
		{
			var x = document.forms["Form"]["name"].value;
			if (x == "") 
			{
				alert("İsim zorunlu alandır!");
				return false;
			}

			var y = document.forms["Form"]["email"].value;
			if (y == "") 
			{
				alert("Mail kısmı boş bırakılamaz!");
				return false;
			}

			var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
			if (forMail.test(y) == false) 
			{
				alert("Geçersiz mail adresi girdiniz!");
				return false;
			}
            


		}