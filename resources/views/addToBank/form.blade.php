<form action="/transactions" method="POST">
@csrf
  <div class="form-row">
    <div class="form-group">
        <label for="email">E-Mail:</label>
        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
      </div>
  </div>
    <div class="form-row">
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          </div>
    </div>
    <div class="form-row">
      <div class="form-group">
          <label for="atitle">Account Title:</label>
          <input type="text" class="form-control" id="atitle" placeholder="Account Holder Name" name="atitle">
        </div>
  </div>
    <div class="form-row">
          <div class="form-group">
              <label for="ccn">Bank Account Number:</label>
              <input id="ccn"  class="form-control" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" name="account_number">
          </div>
    </div>
    <div class='form-row'>
      <div class="form_group">
        <label for="price">Amount:</label>
        <input type="number" id="price" class="form-control col-7" name="amount" placeholder="$0"><br>
      </div>
    </div>
    <div class="sidebar-widget follow mb-5 text-center">
      <button type="submit" class="btn btn-primary">Transfer to Bank Account</button>
  </div>
    
  </form>