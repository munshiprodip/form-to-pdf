<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Service Request Form</title>
    <link rel='stylesheet' href='style.css' />
  </head>
  <body>
    <div class='container'>
      <div class='title'>Contact Details</div>
      <div class='content'>
        <form action='report.php' method='post'>
          <div class='user-details'>
            <div class='input-box'>
              <span class='details'>Full Name</span>
              <input type='text' name='fullname' placeholder='Enter your name' required />
            </div>
            <div class='input-box'>
              <span class='details'>Today's Date</span>
              <input type='date' name='date' required />
            </div>
            <div class='input-box'>
              <span class='details'>Email</span>
              <input type='text' name='email' placeholder='Enter your email' required />
            </div>
            <div class='input-box'>
              <span class='details'>Mobile</span>
              <input
                type='number'
                name='mobile'
                placeholder='Enter your Mobile Number'
                required
              />
            </div>
            <div class='input-box'>
              <span class='details'> Work </span>
              <input type='text' name='work' placeholder='Enter your work here ' required />
            </div>
            <div class='input-box'>
              <span class='details'>DOB</span>
              <input type='text' name='dob' placeholder='Enter your DOB' required />
            </div>
          </div>
          <div class='input-address'>
            <span class='details'>Physical Address</span>
            <textarea
              name='address'
              id='address'
              cols='30'
              rows='3'
              placeholder='Enter your address here'
              required
            ></textarea>
          </div>
          <div class='Phone-details'>
            <div class='phone-info-box'>
              <div class='title'>Phone Details</div>
              <div class='input-box'>
                <span class='details'>Brand</span>
                <input type='text' name='brand' placeholder='Enter your Brand' required />
              </div>
              <div class='input-box'>
                <span class='details'>Model</span>
                <input type='text' name='model' placeholder='Enter your Model' required />
              </div>
              <div class='input-box'>
                <span class='details'>IMEI</span>
                <input type='text' name='imei' placeholder='Enter your IMEI' required />
              </div>
              <div class='input-box'>
                <span class='details'>Password</span>
                <input
                  type='text'
                  name='password'
                  placeholder='Enter your password'
                  required
                />
              </div>
              <div class='input-box'>
                <span class='details'> RS. </span>
                <input type='number' name='rs' placeholder='Enter your Rs.' required />
              </div>
            </div>
          </div>
          <div class='button'>
            <input type='submit' value='Submit Details' />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
