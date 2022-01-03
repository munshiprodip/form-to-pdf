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
              
              <div class="input-box">
                <span class="details">Brand</span>
                <select name="brand" id="brand">
                  <option value="Apple">Apple</option>
                  <option value="Samsung">Samsung</option>
                  <option value="Xiaomi">Xiaomi</option>
                  <option value="Vivo">Vivo</option>
                  <option value="Oppo">Oppo</option>
                  <option value="Realme">Realme</option>
                  <option value="OnePlus">OnePlus</option>
                  <option value="Poco">Poco</option>
                  <option value="Nokia">Nokia</option>
                  <option value="Infinix">Infinix</option>
                  <option value="iTel">iTel</option>
                  <option value="Tecno">Tecno</option>
                </select>
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
          <div class="otherInformation">
            <h4>Other information (circle the correct answer):</h4>
            <div>
              <label for="warranty">Is the phone under warranty?</label>
              <select name="warranty" id="warranty">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <div>
              <label for="is_repaired"
                >Have this phone been repaired by any one before
              </label>
              <select name="is_repaired" id="is_repaired">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <div>
              <label for="is_upgraded"
                >Have you upgraded the phone software?</label
              >
              <select name="is_upgraded" id="is_upgraded">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <div>
              <label for="is_owner"
                >Are you the original owner of the phone?
              </label>
              <select name="is_owner" id="is_owner">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <div>
              <label for="is_impact_damage"
                >Have this phone suffered from impact damage?</label
              >
              <select name="is_impact_damage" id="is_impact_damage">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <div>
              <label for="is_liquid_damage">Does the phone have liquid damage? </label>
              <select name="is_liquid_damage" id="is_liquid_damage">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
          </div>
          <div class="faults_of_phone">
            <h4>
              Please tell us the faults of your mobile phone and you would like
              us to repair for you (tick as many as possible answers)
            </h4>
            <br />
            <input
              type="checkbox"
              id="prob_turning_on"
              name="prob_turning_on"
              value="1"
            />
            <label for="prob_turning_on"> Phone not turning on</label><br />
            <input
              type="checkbox"
              id="prob_charging"
              name="prob_charging"
              value="1"
            />
            <label for="prob_charging"> Phone is not charging</label><br />
            <input
              type="checkbox"
              id="prob_power_btn"
              name="prob_power_btn"
              value="1"
            />
            <label for="prob_power_btn"> Power button not working</label> <br />
            <input
              type="checkbox"
              id="prob_keypad"
              name="prob_keypad"
              value="1"
            />
            <label for="prob_keypad"> Keypad not working</label><br />
            <input
              type="checkbox"
              id="prob_joystick"
              name="prob_joystick"
              value="1"
            />

            <label for="prob_joystick"> Joystick is faulty</label><br />
            <input
              type="checkbox"
              id="prob_hold_charge"
              name="prob_hold_charge"
              value="1"
            />
            <label for="prob_hold_charge"> cannot hold charge</label> <br />
            <input
              type="checkbox"
              id="prob_touch"
              name="prob_touch"
              value="1"
            />

            <label for="prob_touch"> Touch screen in not working</label><br />
            <input
              type="checkbox"
              id="prob_datap_ort"
              name="prob_datap_ort"
              value="1"
            />
            <label for="prob_datap_ort"> Data port not working</label><br />
            <input
              type="checkbox"
              id="prob_sim_card"
              name="prob_sim_card"
              value="1"
            />
            <label for="prob_sim_card"> cannot read SIM card</label> <br />
            <input
              type="checkbox"
              id="prob_lcd"
              name="prob_lcd"
              value="1"
            />
            <label for="prob_lcd"> LCD is cracked</label><br />
            <input
              type="checkbox"
              id="prob_backlight"
              name="prob_backlight"
              value="1"
            />
            <label for="prob_backlight"> LCD backlight is not working</label><br />
            <input
              type="checkbox"
              id="prob_ringer"
              name="prob_ringer"
              value="1"
            />
            <label for="prob_ringer"> Ringer not working </label><br />
            <input
              type="checkbox"
              id="prob_speaker"
              name="prob_speaker"
              value="1"
            />
            <label for="prob_speaker"> Cannot hear the other party </label><br />
            <input
              type="checkbox"
              id="prob_mic"
              name="prob_mic"
              value="1"
            />
            <label for="prob_mic"> Other party cannot hear me </label><br />
            <input
              type="checkbox"
              id="prob_password"
              name="prob_password"
              value="1"
            />
            <label for="prob_password"> Forget my phone password </label><br />
            <input
              type="checkbox"
              id="prob_charging_port"
              name="prob_charging_port"
              value="1"
            />
            <label for="prob_charging_port"> Charging port is faulty </label><br />
            <input
              type="checkbox"
              id="prob_network"
              name="prob_network"
              value="1"
            />
            <label for="prob_network"> Network lock </label><br />
            <input
              type="checkbox"
              id="prob_broken"
              name="prob_broken"
              value="1"
            />
            <label for="prob_broken"> Housing broken </label><br />
            <label for=""
              >Other Faults: <input type="text" name="otherFault" id="otherFault"
            /></label>
          </div>
          <div class="button">
            <input type="submit" value="Submit Details" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
