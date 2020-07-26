<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.inputmask.min.js"></script>
  <script src="js/tooltipster.bundle.min.js"></script>

  <link rel="stylesheet" href="style/tooltipster.bundle.min.css">
  <link rel="stylesheet" href="style/tooltipster-sideTip-light.min.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
</head>

<body>
  <div class="container col-12 col-sm-8 col-md-6">
    <h2>Checkout</h2>
    <h4>Products</h4>
    <ul class="lists">
      <li>
        <a href="">Lorem ipsum dolor sit amet consectetur.</a>
        <p>$499.00</p>
      </li>
      <li>
        <a href="">Lorem ipsum dolor sit.</a>
        <p>$130.00</p>
      </li>
    </ul>
    <h4>Shipping method</h4>
    <ul class="lists">
      <li>
        <p>FedEx</p>
        <p>$13.00</p>
      </li>
    </ul>
    <h4>Paymant method</h4>
    <ul class="nav">
      <li class="nav-item">
        <a class="list-group-item list-group-item-action active" data-toggle="tab" href="#credit_card">Credit card</a>
      </li>
      <li class="nav-item">
        <a class="list-group-item list-group-item-action" data-toggle="tab" href="#gift_card">Gift card</a>
      </li>
      <li class="nav-item">
        <a class="list-group-item list-group-item-action" data-toggle="tab" href="#paypal">PayPal</a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="credit_card" class="tab-pane active">
        <form class="" action="" method="post">
          <div class="col-auto row">
            <div class="front col-12 col-sm-7 col-md-7">
              <fieldset class="form-group">
                <label for="cart_number">Card number</label>
                <input type="text" class="form-control" id="cart_number" name="cart_number">
              </fieldset>
              <fieldset class="form-group">
                <label for="valid_thru">Valid thru (mm/yy)</label>
                <div class="split">
                  <input type="text" class="valid_thru form-control" id="valid_thru_first" name="valid_thru_first"
                    size="2" maxlength="2">
                  <p>&nbsp/&nbsp</p>
                  <input type="text" class="valid_thru form-control" id="valid_thru_second" name="valid_thru_second"
                    size="2" maxlength="2">
                </div>
              </fieldset>
              <fieldset class="form-group">
                <label for="cartholder">Cardholder's name</label>
                <input type="text" class="form-control" id="cartholder" name="cartholder">
              </fieldset>
            </div>
            <div class="back col-12 col-sm-5 col-md-5">
              <fieldset class="form-group verification_code_input">
                <label for="verification_code">CVV/CVC</label>
                <div>
                  <input type="text" class="form-control" id="verification_code" name="verification_code" size="3"
                    maxlength="3" pattern="[0-9]{3}">
                  <div id="tooltip" title="Данный код расположен на обратной стороне вашей кредитной карты">
                    <p>?</p>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <div class="accept">
            <input type="checkbox" id="terms" name="" value=""> I accept the <a href="#myModal"
              data-toggle="modal">Terms and Conditions</a>
          </div>
          <button type="submit" name="button" class="btn btn-lg btn-block text-white" id="button_submit"
            id="modal">Place order (
            $624.99 )</button>
        </form>
      </div>

      <div id="gift_card" class="tab-pane fade">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempora ipsa delectus sunt blanditiis fuga.
          Similique nisi reiciendis vero numquam odit maxime illo magnam fuga, quae quo facere, laboriosam rerum. Porro
          libero dolorem ipsum et mollitia voluptate, assumenda dolore magni.</p>
      </div>

      <div id="paypal" class="tab-pane fade">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident magnam doloribus unde eaque earum
          eligendi odit obcaecati, illo ratione, minus, recusandae porro beatae adipisci aperiam. Error repellendus esse
          tenetur quos.</p>
      </div>
    </div>
  </div>

  <!-- modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Terms and Conditions</h4>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quisquam, molestias ullam voluptate
            explicabo nesciunt perspiciatis, architecto voluptatem porro quas, quis at maxime nostrum ex iste expedita
            quidem maiores facilis!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        </div>
      </div>

    </div>
  </div>

  <script>
    $(document).ready(function () {
      // CVV

      $("#cart_number").inputmask("9999 9999 9999 9999");
      $(".valid_thru").inputmask("99");
      $("#cartholder").inputmask("a{1,20} a{1,20}", {
        definitions: {
          'a': {
            validator: "[a-zA-Z]",
            casing: "upper"
          }
        }
      });
      $("#verification_code").inputmask("999");

      $("form").validate({
        errorPlacement: function (error, element) { },
        rules: {
          // Card number
          cart_number: {
            required: true,
            // creditcard: true,
            // rangelength: [16, 18],
          },
          // mm/yy
          valid_thru_first: {
            required: true,
            rangelength: [2, 2],
          },
          valid_thru_second: {
            required: true,
            rangelength: [2, 2],
          },
          // Cardholder's name
          cartholder: {
            required: true,
          },
          // CVV/CVC
          verification_code: {
            required: true,
            rangelength: [3, 3],
          }
        },
      });
    });

    $('#tooltip').tooltipster({
      theme: 'tooltipster-light'
    });

    // check and validation
    $('#button_submit').click(function () {
      if ($('form').valid()) {
        if ($("#terms").is(':checked')) {
          //
        } else {
          alert('Дайте свое согласие на обработку данных!');
        }
      } else {
        alert('Заполните все поля со звездочкой корректными данными!');
      }
    });
  </script>
</body>

</html>