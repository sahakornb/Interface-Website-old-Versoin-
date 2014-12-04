	var count = 0;
	var Zero = "0";
	var temp;
	var csent = "c";
	function ResetAll()
	{
					count = 0;
					 temp = 0;
					 document.form1.output.value = "";
					 document.form1.sendt.disabled = true;
					  document.form1.reset.disabled = true
	}
	function clickCounter(btn)
	{
		
		if(count == 0)
		{
			count = count + 1; 
			if(btn.value == "up")
			{
				document.form1.sendt.disabled = false;
				document.form1.reset.disabled = false;
				document.form1.output.value = "0" +1;
				temp = 1;
			}
			else if(btn.value == "down")
			{
				document.form1.sendt.disabled = false;
				document.form1.reset.disabled = false;
				document.form1.output.value = 80;
				temp = 80;
			}
			else 
			{
				if(btn.id == "btnReset")
				{
					ResetAll();
				}
				else{
				document.form1.sendt.disabled = false;
				document.form1.reset.disabled = false;
				document.form1.output.value = btn.value;
				temp = btn.value;
				}
			}
		}
		else if(count != 0)
		{
			
			if(btn.value == "up")
			{
				if(temp >= 9)
				{
					if(temp >= 80)
					{
						temp = 1;
						document.form1.output.value = "0" + temp;
						
					}
					else if (temp < 80)
					{
					temp++;
					document.form1.output.value = temp;
					
					}
				}
				else if (temp < 9)
				{
				temp++;	
				document.form1.output.value = "0"+temp;
				
				}
				
			}
			else if (btn.value == "down")
			{
				if(temp <= 10 )
				{
					if(temp <= 1)
					{
						temp = 80;
						document.form1.output.value = temp;
						
						
					}
					else
					{
					temp--;
					document.form1.output.value = "0" + temp;
					
					}
				}
				else
				{
					temp--;
					document.form1.output.value = temp;
					
					
				}
				
			}
			else 
			{
				 if(btn.id == "btnReset")
				 {
					ResetAll();
					
				 }
				 else 
				 {
				 if(temp == 0)
					{
						document.form1.output.value = btn.value;
						temp = btn.value;
					}
					
					else 
					{
					if(temp >= 10)
					{
					document.form1.output.style = "font-size:32px";
					document.form1.output.value = "2 ตัวเลขเท่านั้น";
					document.form1.sendt.disabled = true;
					temp = 0;
					count = 0;
					}
					else if(temp < 10 )
					{
					document.form1.output.value = temp + btn.value;
					temp = document.form1.output.value;
					}
				
					}
			}
			
		}
		}
		
		
	}