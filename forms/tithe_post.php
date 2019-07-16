<fieldset>
    <div class="form-group">
        <label for="memb_search">Search Member *</label>

          <input type="text" name="typeahead" id="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Type your Search Query" onclick="member_split()" autofocus>

    </div>

    <br>
    <hr class="style13">
    <div class="form-group col-lg-2">
    <label for="memb_id">Member ID:</label>
    <input type="text" class="form-control" id="memb_id" name="memb_id" readonly>
    </div>
    <div class="form-group col-lg-6">
    <label for="memb_name">Member Name:</label>
    <input type="text" class="form-control" id="memb_name" name="memb_name" readonly>
    </div>
    <div class="form-group col-lg-4">
    <label for="memb_band">Member Band:</label>
    <input type="text" class="form-control" id="memb_band" name="memb_band" readonly>
    </div>
    <div class="form-group">
    <label for="memb_band">Member Branch:</label>
    <input type="text" class="form-control" id="memb_branch" name="memb_branch" readonly>
    </div>
    <input type="hidden" class="form-control" id="memb_phone" name="memb_phone" readonly>


    <div class="form-group">
  <label class="control-label " for="calendar">
   Tithe Period
  </label>
  <div class="input-group">
   <div class="input-group-addon">
	<i class="fa fa-calendar"></i>
   </div>
   <input id ="duration" name="duration" type="text" autocomplete="off"
       class="datepicker-here"
       data-language='en'
       data-min-view="months"
       data-view="months"
       data-date-format="MM yyyy"
       data-multiple-dates="100"
       data-multiple-dates-separator=", " required/>
 </div>

 <div class="form-group">

  <label class="control-label " for="paymode">
   Mode of Payment
  </label>
  <select class="form-control" id="paymode" name="paymode" onchange="select_mode(this.value)">
  <option></option>
    <option>Cash</option>
    <option>Card</option>
    <option>Cheque</option>
    <option>Direct Lodgement</option>
   </select>
  </div>
 </div>

 <div id="cashmode">

    <div class="custom-control custom-checkbox mb-3 form-inline">
      <input type="checkbox" class="custom-control-input" id="1kchk" name="1kchk" onchange="k1deno()">
      <label class="custom-control-label" for="1kchk">N1,000.00</label>
      <label class="mr-sm-3" for="paymode">&nbsp;&nbsp;</label>
      <input class="form-control" id="1kqty" name="1kqty" type="number" value="" onchange="k1convert(this.value)" disabled>
      <input class="form-control" id="1kttl" name="1kttl" type="text" value="" onfocus="sum_up_values()" readonly>
    </div>
    <hr class="style13">
    <div class="custom-control custom-checkbox mb-3 form-inline">
      <input type="checkbox" class="custom-control-input" id="5hchk" name="5hchk" onchange="h5deno()">
      <label class="custom-control-label" for="5hchk">N500.00</label>
      <label class="mr-sm-3" for="paymode">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="form-control" id="5hqty" name="5hqty" type="number" value="" onchange="h5convert(this.value)" disabled>
      <input class="form-control" id="5httl" name="5httl" type="text" value="" onfocus="sum_up_values()" readonly>
    </div>
    <hr class="style13">

    <div class="custom-control custom-checkbox mb-3 form-inline">
      <input type="checkbox" class="custom-control-input" id="2hchk" name="2hchk" onchange="h2deno()">
      <label class="custom-control-label" for="2hchk">N200.00</label>
      <label class="mr-sm-3" for="paymode">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="form-control" id="2hqty" name="2hqty" type="number" value="" onchange="h2convert(this.value)" disabled>
      <input class="form-control" id="2httl" name="2httl" type="text" value="" onfocus="sum_up_values()" readonly>
    </div>
    <hr class="style13">

    <div class="custom-control custom-checkbox mb-3 form-inline">
      <input type="checkbox" class="custom-control-input" id="1hchk" name="1hchk" onchange="h1deno()">
      <label class="custom-control-label" for="1hchk">N100.00</label>
      <label class="mr-sm-3" for="paymode">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="form-control" id="1hqty" name="1hqty" type="number" value="" onchange="h1convert(this.value)" disabled>
      <input class="form-control" id="1httl" name="1httl" type="text" value="" onfocus="sum_up_values()" readonly>
    </div>
    <hr class="style13">

    <div class="custom-control custom-checkbox mb-3 form-inline">
      <input type="checkbox" class="custom-control-input" id="50chk" name="50chk" onchange="n50deno()">
      <label class="custom-control-label" for="50chk">N50.00</label>
      <label class="mr-sm-3" for="paymode">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="form-control" id="50qty" name="50qty" type="number" value="" onchange="n50convert(this.value)" disabled>
      <input class="form-control" id="50ttl" name="50ttl" type="text" value="" onfocus="sum_up_values()" readonly>
    </div>
    <hr class="style13">

    <div class="custom-control custom-checkbox mb-3 form-inline">
      <input type="checkbox" class="custom-control-input" id="20chk" name="20chk" onchange="n20deno()">
      <label class="custom-control-label" for="20chk">N20.00</label>
      <label class="mr-sm-3" for="paymode">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="form-control" id="20qty" name="20qty" type="number" value="" onchange="n20convert(this.value)" disabled>
      <input class="form-control" id="20ttl" name="20ttl" type="text" value="" onfocus="sum_up_values()" readonly>
    </div>
    <hr class="style13">

    <div class="custom-control custom-checkbox mb-3 form-inline">
      <input type="checkbox" class="custom-control-input" id="10chk" name="10chk" onchange="n10deno()">
      <label class="custom-control-label" for="10chk">N10.00</label>
      <label class="mr-sm-3" for="paymode">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="form-control" id="10qty" name="10qty" type="number" value="" onchange="n10convert(this.value)" disabled>
      <input class="form-control" id="10ttl" name="10ttl" type="text" value="" onfocus="sum_up_values()" readonly>
    </div>
    <hr class="style13">

    <div class="custom-control custom-checkbox mb-3 form-inline">
      <input type="checkbox" class="custom-control-input" id="5chk" name="5chk" onchange="n5deno()">
      <label class="custom-control-label" for="5chk">N5.00</label>
      <label class="mr-sm-3" for="paymode">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="form-control" id="5qty" name="5qty" type="number" value="" onchange="n5convert(this.value)" disabled>
      <input class="form-control" id="5ttl" name="5ttl" type="text" value="" onfocus="sum_up_values()" readonly>
    </div>
    <hr class="style13">

</div>

<div id="cardmode">

<div class="form-group">
  <label class="control-label " for="cardno">
   Enter Last Four(4) digits of the Card
  </label>
  <div class="input-group">
   <div class="input-group-addon">
	<i class="fa fa-credit-card"></i>
   </div>
   <input class="form-control" id="cardno" name="cardno" type="text" value="" autocomplete="off" maxlength="4">
  </div>
 </div>

</div>
<div id="chequemode">
<div class="form-group col-sm-3">
        <label>Bank</label>
        <?php //$opt_arr = get_countries();
           $db = getDbInstance();
           $db->orderBy('BankName','asc');
           $select = "BankName";
           $opt_arr = $db->get('banks_tbl', null, $select);
                            ?>
            <select name="cbankname" id="cbankname" class="form-control" required>
                <option value="">Select Bank</option>
                <?php
                foreach ($opt_arr as $opt) {

                    echo '<option value="'.$opt['BankName'].'">' . $opt['BankName'] . '</option>';
                }

                ?>
            </select>
    </div>
    <div class="form-group">
  <label class="control-label " for="chequenumber">
   Enter Bank Cheque Number
  </label>
  <div class="input-group col-sm-3">
   <div class="input-group-addon">
	<i class="fa fa-bank"></i>
   </div>
   <input class="form-control" id="chequenumber" name="chequenumber" type="text" value="" maxlength="12">
  </div>
 </div>
</div>
<div id="directmode">
<div class="form-group col-sm-3">
        <label>Bank</label>
        <?php //$opt_arr = get_countries();
           $db = getDbInstance();
           $db->orderBy('BankName','asc');
           $select = "BankName";
           $opt_arr = $db->get('banks_tbl', null, $select);
                            ?>
            <select name="dbankname" id="dbankname" class="form-control selectpicker" required>
                <option value="">Select Bank</option>
                <?php
                foreach ($opt_arr as $opt) {

                  echo '<option value="'.$opt['BankName'].'">' . $opt['BankName'] . '</option>';
                }

                ?>
            </select>
    </div>

  <div class="form-group">
  <label class="control-label " for="transact_date">
   Transaction Date
  </label>
  <div class="input-group col-sm-2">
   <div class="input-group-addon">
	<i class="fa fa-calendar"></i>
   </div>
   <input class="form-control" id="transact_date" name="transact_date" type="date" value="">
  </div>
 </div>

</div>




 <div class="form-group">
  <label class="control-label " for="amountpaid">
   Amount Paid
  </label>
  <div class="input-group">
   <div class="input-group-addon">
	<i class="fa fa-money"></i>
   </div>
   <input class="form-control" id="amountpaid" name="amountpaid" type="text" autocomplete="off" onclick="" readonly>
  </div>
 </div>
</div>
<div class="text-center">
 <button type="submit" class="btn btn-success btn-lg"><i class='fa fa-money'>&nbsp;</i>Post Transaction</button>
</div>
</fieldset>