function k1convert()
{
	if(document.getElementById('1kqty').value!="")
		{
            var floor = Math.floor;
            var d_qty = floor(parseFloat(document.getElementById('1kqty').value));
            var curr_value = d_qty * 1000;
                //alert("Total is: "+ curr_value);
           document.getElementById('1kttl').value =curr_value;
            
        }
}

function h5convert()
{
	if(document.getElementById('5hqty').value!="")
		{
            var floor = Math.floor;
            var d_qty = floor(parseFloat(document.getElementById('5hqty').value));
            var curr_value = d_qty * 500;
                //alert("Total is: "+ curr_value);
           document.getElementById('5httl').value =curr_value;
            
        }
}

function h2convert()
{
	if(document.getElementById('2hqty').value!="")
		{
            var floor = Math.floor;
            var d_qty = floor(parseFloat(document.getElementById('2hqty').value));
            var curr_value = d_qty * 200;
                //alert("Total is: "+ curr_value);
           document.getElementById('2httl').value =curr_value;
            
        }
}

function h1convert()
{
	if(document.getElementById('1hqty').value!="")
		{
            var floor = Math.floor;
            var d_qty = floor(parseFloat(document.getElementById('1hqty').value));
            var curr_value = d_qty * 100;
                //alert("Total is: "+ curr_value);
           document.getElementById('1httl').value =curr_value;
            
        }
}

function n50convert()
{
	if(document.getElementById('50qty').value!="")
		{
            var floor = Math.floor;
            var d_qty = floor(parseFloat(document.getElementById('50qty').value));
            var curr_value = d_qty * 50;
                //alert("Total is: "+ curr_value);
           document.getElementById('50ttl').value =curr_value;
            
        }
}

function n20convert()
{
	if(document.getElementById('20qty').value!="")
		{
            var floor = Math.floor;
            var d_qty = floor(parseFloat(document.getElementById('20qty').value));
            var curr_value = d_qty * 20;
                //alert("Total is: "+ curr_value);
           document.getElementById('20ttl').value =curr_value;
            
        }
}

function n10convert()
{
	if(document.getElementById('10qty').value!="")
		{
            var floor = Math.floor;
            var d_qty = floor(parseFloat(document.getElementById('10qty').value));
            var curr_value = d_qty * 10;
                //alert("Total is: "+ curr_value);
           document.getElementById('10ttl').value =curr_value;
            
        }
}

function n5convert()
{
	if(document.getElementById('5qty').value!="")
		{
            var floor = Math.floor;
            var d_qty = floor(parseFloat(document.getElementById('5qty').value));
            var curr_value = d_qty * 5;
                //alert("Total is: "+ curr_value);
           document.getElementById('5ttl').value =curr_value;
            
        }
}


