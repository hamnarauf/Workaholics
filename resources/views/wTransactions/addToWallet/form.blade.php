<form action="/wtransactions" method="POST">
@csrf
    <div class="form-row">
        <div class="form-group">
            <label for="name">Card Holder Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="account_name">
          </div>
    </div>
    <div class="form-row">
          <div class="form-group">
              <label for="ccn">Credit Card Number:</label>
              <input id="ccn"  class="form-control" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" name="account_number">
          </div>
    </div>
    <div class="form-row">
        <div class="form_group">
            <label for="expdate">Expiry Date (MM/YYYY):</label>
            <input class="form-control col-7" type="month" id="expdate" name="expdate"><br>
          </div>
          <div class="form_group">
            <label for="days">CVV / CVC:</label>
            <input type="number" class="form-control col-7" id="quantity" name="days" placeholder="XXX"><br>
          </div>
    </div>
    <div class='form-row'>
      <div class="form_group">
        <label for="price">Amount:</label>
        <input type="number" class="form-control col-7" name="amount" placeholder="$0"><br>
      </div>
      <div class="form_group">
        <input type="number" class="form-control col-7" name="user_id" placeholder="$0" hidden value="1"><br>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Add to Wallet</button>
  </form>