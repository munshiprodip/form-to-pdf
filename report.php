<?php
require_once 'dompdf/autoload.inc.php'; 
use Dompdf\Dompdf; 
  if($_POST){
    $dompdf = new Dompdf();

    $fullname           = $_POST['fullname'];
    $date               = $_POST['date'];
    $email              = $_POST['email'];
    $mobile             = $_POST['mobile'];
    $work               = $_POST['work'];
    $dob                = $_POST['dob'];
    $address            = $_POST['address'];
    $brand              = $_POST['brand'];
    $model              = $_POST['model'];
    $imei               = $_POST['imei'];
    $password           = $_POST['password'];
    $rs                 = $_POST['rs'];

    $warranty           = $_POST['warranty'];
    $is_repaired        = $_POST['is_repaired'];
    $is_upgraded        = $_POST['is_upgraded'];
    $is_owner           = $_POST['is_owner'];
    $is_impact_damage   = $_POST['is_impact_damage'];
    $is_liquid_damage   = $_POST['is_liquid_damage'];
    
    $prob_turning_on    = isset($_POST['prob_turning_on'])?'[#]':'[ ]';
    $prob_charging      = isset($_POST['prob_charging'])?'[#]':'[ ]';
    $prob_power_btn     = isset($_POST['prob_power_btn'])?'[#]':'[ ]';
    $prob_keypad        = isset($_POST['prob_keypad'])?'[#]':'[ ]';
    $prob_joystick      = isset($_POST['prob_joystick'])?'[#]':'[ ]';
    $prob_hold_charge   = isset($_POST['prob_hold_charge'])?'[#]':'[ ]';
    $prob_touch         = isset($_POST['prob_touch'])?'[#]':'[ ]';
    $prob_datap_ort     = isset($_POST['prob_datap_ort'])?'[#]':'[ ]';
    $prob_sim_card      = isset($_POST['prob_sim_card'])?'[#]':'[ ]';
    $prob_lcd           = isset($_POST['prob_lcd'])?'[#]':'[ ]';
    $prob_backlight     = isset($_POST['prob_backlight'])?'[#]':'[ ]';
    $prob_ringer        = isset($_POST['prob_ringer'])?'[#]':'[ ]';
    $prob_speaker       = isset($_POST['prob_speaker'])?'[#]':'[ ]';
    $prob_mic           = isset($_POST['prob_mic'])?'[#]':'[ ]';
    $prob_password      = isset($_POST['prob_password'])?'[#]':'[ ]';
    $prob_charging_port = isset($_POST['prob_charging_port'])?'[#]':'[ ]';
    $prob_network       = isset($_POST['prob_network'])?'[#]':'[ ]';
    $prob_broken        = isset($_POST['prob_broken'])?'[#]':'[ ]';
    $otherFault         = isset($_POST['otherFault'])?$_POST['otherFault']:'';
    

    $html = "<!DOCTYPE html>
      <html>
      <head>
      <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
      <title>IMEI - $imei</title>
      <meta name='generator' content='BCL easyConverter SDK 5.0.252'>
      <meta name='author' content='Sai Tara Traders'>
      <meta name='title' content='M/S STT Gadgets'>
      <style type='text/css'>
      @page { margin: 0px; }
      body { margin: 0px; }

      #page_1 {position:relative; overflow: hidden;margin: 28px 0px 36px 17px;padding: 0px;border: none;width: 777px;}
      #page_1 #id1_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 777px;overflow: hidden;}
      #page_1 #id1_2 {border:none;margin: 22px 0px 0px 2px;padding: 0px;border:none;width: 775px;overflow: hidden;}
      #page_1 #id1_2 #id1_2_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 384px;overflow: hidden;}
      #page_1 #id1_2 #id1_2_2 {border:none;margin: 19px 0px 0px 0px;padding: 0px;border:none;width: 391px;overflow: hidden;}
      #page_1 #id1_3 {border:none;margin: 24px 0px 0px 2px;padding: 0px;border:none;width: 775px;overflow: hidden;}

      #page_1 #p1dimg1 {position:absolute;top:12px;left:9px;z-index:-1;width:710px;height:389px;}
      #page_1 #p1dimg1 #p1img1 {width:710px;height:389px;}

      .ft0{font: bold 16px 'Calibri';line-height: 19px;}
      .ft1{font: bold 21px 'Calibri';;line-height: 26px;}
      .ft2{font: bold 13px 'Calibri';line-height: 15px;}
      .ft3{font: 13px 'Calibri';line-height: 15px;}
      .ft4{font: 13px 'Times New Roman';line-height: 15px;}
      .ft5{font: 11px 'Times New Roman';margin-left: 18px;line-height: 14px;}
      .ft6{font: 11px 'Times New Roman';line-height: 14px;}
      .ft7{font: 13px 'Calibri';;line-height: 15px;}
      .ft8{font: 13px 'Calibri';line-height: 16px;}
      .ft9{font: 13px 'Calibri';line-height: 18px;}
      .ft10{font: 13px 'Calibri';margin-left: 18px;line-height: 15px;}
      .ft11{font: 13px 'Calibri';margin-left: 18px;line-height: 17px;}
      .ft12{font: 13px 'Calibri';line-height: 17px;}
      .ft13{font: 13px 'Calibri';margin-left: 18px;line-height: 16px;}
      .ft14{font: 1px 'Calibri';line-height: 1px;}

      .p0{text-align: left;padding-left: 158px;margin-top: 0px;margin-bottom: 0px;}
      .p1{text-align: left;padding-left: 160px;margin-top: 0px;margin-bottom: 0px;}
      .p2{text-align: left;padding-left: 160px;margin-top: 1px;margin-bottom: 0px;}
      .p3{text-align: left;padding-left: 275px;margin-top: 34px;margin-bottom: 0px;}
      .p4{text-align: left;padding-left: 2px;margin-top: 15px;margin-bottom: 0px;}
      .p5{text-align: left;padding-left: 2px;margin-top: 4px;margin-bottom: 0px;}
      .p6{text-align: left;padding-left: 2px;margin-top: 22px;margin-bottom: 0px;}
      .p7{text-align: left;padding-left: 24px;padding-right: 89px;margin-top: 1px;margin-bottom: 0px;text-indent: -24px;}
      .p8{text-align: left;padding-left: 24px;padding-right: 93px;margin-top: 0px;margin-bottom: 0px;text-indent: -24px;}
      .p9{text-align: left;margin-top: 0px;margin-bottom: 0px;}
      .p10{text-align: left;padding-left: 2px;margin-top: 21px;margin-bottom: 0px;}
      .p11{text-align: left;padding-left: 2px;margin-top: 3px;margin-bottom: 0px;}
      .p12{text-align: left;margin-top: 4px;margin-bottom: 0px;}
      .p13{text-align: left;padding-right: 66px;margin-top: 4px;margin-bottom: 0px;}
      .p14{text-align: left;padding-right: 83px;margin-top: 4px;margin-bottom: 0px;}
      .p15{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
      .p16{text-align: left;margin-top: 22px;margin-bottom: 0px;}
      .p17{text-align: left;padding-right: 20px;margin-top: 4px;margin-bottom: 0px;}
      .p18{text-align: left;padding-left: 24px;margin-top: 0px;margin-bottom: 0px;}
      .p19{text-align: left;padding-left: 24px;margin-top: 2px;margin-bottom: 0px;}
      .p20{text-align: left;padding-left: 48px;margin-top: 4px;margin-bottom: 0px;}
      .p21{text-align: left;padding-left: 48px;padding-right: 43px;margin-top: 1px;margin-bottom: 0px;text-indent: -24px;}
      .p22{text-align: left;padding-left: 48px;padding-right: 25px;margin-top: 0px;margin-bottom: 0px;text-indent: -24px;}
      .p23{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
      .p23::after{display:inline-block;width:0;white-space:nowrap;content:' . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .'}

      .td0{padding: 0px;margin: 0px;width: 288px;vertical-align: bottom;}
      .td1{padding: 0px;margin: 0px;width: 264px;vertical-align: bottom;}
      .td2{padding: 0px;margin: 0px;width: 165px;vertical-align: bottom;}
      .td3{padding: 0px;margin: 0px;width: 480px;vertical-align: bottom;}
      .td4{padding: 0px;margin: 0px;width: 211px;vertical-align: bottom;}

      .tr0{height: 16px;}
      .tr1{height: 18px;}
      .tr2{height: 19px;}
      .tr3{height: 20px;}
      .tr4{height: 17px;}
      .tr5{height: 21px;}

      .t0{width: 717px;margin-top: 1px;font: bold 13px 'Calibri';}
      .t1{width: 691px;margin-top: 15px;font: 13px 'Calibri';}

      </style>
      </head>

      <body>
        <div id='page_1'>
          <div id='p1dimg1'>
            <img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAsYAAAGFCAIAAABxLqK9AAAOsUlEQVR4nO3dX4gVdePH8TPnnHW3ItfA3FwLSoOCEqIgiiDpJq3MiyKieCChq26KiqC6CLqpO/Mm6KYIYsOikCijov8XERUlBIaCFkhtSib909Y9c+Z3Mb/nPIdV1/3zMWt7vS7i7OzM94yCZ97NfGdOUVVV41iKomg0Gu12+5i/TamqqizLk/oWf2fH+8sHgH+c6YphaGjo7rvvrtviZOh2u7t27Xr33XdP0vgAwF+mmOYsxdKlS/fv33/ykqLT6YyNjW3cuPEkjf/35ywFAAtG81TvAACwEEgKACBAUgAAAZICAAiYdVJ0u93G7OcV1neK1tsCAAvPrJNi+fLly5YtW7ly5cw3ee655+qtli9f7h4HAFiQZpEUVVXdeOON3W63qqrff/992bJlnU5nJhs+8sgjVVXVMXHybkkFAE6hWSRFURTbt2/v/VhV1WWXXTb9tYzPPvvs7LPP7q3T7Xb37t3r8gcALDzzmp75008//fnnn9Ncy1i/fv18xm80GkVRtFqt3o/N5v92+HjLp+j/1fHOkfQP1f+6t1W9Yf+Lo9eZyc4AwEI1r4NfWZYrV6587LHHjvnbZcuWzXnmRH2EPnTo0MMPP9zpdKqqmpycrKrqjz/+WLJkSb1OvaT+78TExNGDtFqtG264od68LMuqqsbHx0877bQp65x11ln9b1FfzeklQrPZ3Lp1a31m5ddffy3LstPpdLvd/vJYtGjR999/33uXTqezYcMGYQHAv8p8D3tlWT7zzDNHLxwZGZnnTMyBgYHBwcEnnniiHqf+ArPBwcGDBw82+m45qZe3Wq1ffvmlf/Nms/nmm2++/vrrvR8bjcayZcsOHTrUv9qGDRt+/vnnuhjqoeppH70gqKpqeHi40Wj8/PPPZ5xxRlEUzWbzxRdf7L98MzExcc455zT6zk+8+uqrw8PDJo4A8O8x96QYGBjovT777LP37NnT+/GSSy7pP+LO5//Xu93uyMjI4ODgwMDA0NDQNddc02g0Jicnu93u6OjookWL6uVXXnnlmWeeWVVVffKg1WqtX7/++uuvb7VazWZzaGho0aJFg4ODN910U+O/1y/q4/3LL79crz80NFQPNTg42O12Jycnp+zJ8PDwRRdd1G63BwcH//Of//Sapn5x880393ay1Wq12+19+/bddtttc/6DA8A/y9wP9p9++ml/K1x11VWNRqPb7a5Zs6Y+kfD/b9Bszud0RbPZPHjw4JEjRzqdzsTExOeff/7CCy+02+1ms3ngwIHJycl6+fbt2+tEqB+AUZbla6+91vjv9YuJiYnJyckjR468/fbbRVH0bj95//336/io16mHKsty+/bt3W738ssv7z9X0e12v/3227Is6+sj9fLNmzeXZfnQQw+98847vZ2sqqo+mfHSSy8dPTMDABak6b7cfHq//fbbvn37li9fXk8+qKpqZGTknnvu2bFjR2+dO+64Y9OmTaOjo3N7i7Isn3322f5bVcuyvOuuu26//fYtW7b0n0goy/LLL7+89NJL6x9XrVrVaDQefPDBdrvdv3n/uZOqqq677rrx8fFt27b1v2m3273iiiuqqnr11VcvuOCC3nzMxYsXT7lptt1u33fffVVVjY6Obtq0qf9XzWazjok6cQBgwZt7UtS++OKLyy67rH7d7Xaffvrp+nVRFBdeeOHmzZvnc4qinjJ59MJGo3H0IzH611yxYkVVVV9//fUJ3/3bb7+tz1sc/aspJXT48OFjjlAUxf333z/9uwDAgjff6ZkjIyOvvPLK0cuHh4c/+eSTU3XXQ30d5M477zzhmldfffWco6fesCzLoihOP5b+6SYAsLDN95DfbrfXrFlz//33908aKIrim2++mefI8/Hrr7/u3bt348aN69atm3Lbxdq1a+sXrVbrgQceqKrqgw8+qO/1qC1atGiGkVGW5dq1a4ui2L179+E+f/755+LFiw8fPjzDp4sCwAKQOYvw6KOPrl27tj4nURTF/v37+w/Sf72iKFatWlWW5RtvvNFqtXrzIfbs2bNt27aVK1c2m82yLJ966qlGo3HttddefPHFvXUef/zxmZ+3eOedd3777bfzzz9/9+7dvRHa7faPP/740UcfuYkUgH+P2IH/+eefL4qivgqQGnPOQ9WTMFavXr1jx45Dhw7VFyDquZkTExPfffddb55mq9Wqquqrr75qNpt1EpVluXXr1ltuuaUOixPmxdKlSw8cOHD++edPTk7Wp2rqkxNr1qyZ284DwD9RbK5DffivnwMx/9HqJmi1Wi+99NKU5Y1GY2BgYGxsbMrysbGxKadGdu7cWRTF+Ph4/WOz2Vy/fv3pp5/ef99H/YCKjz/+uLfbTz755K233rpnz5633nqrfhz4li1bptnVTqezZMmSdevW9S79jI+POz8BwL/NsW92aDQaRVEsXbp0//79/UfH0dHR3o0VH3744SWXXHLCNyjLsv87zb/88ssVK1bUx+9OpzM2NrZx48bjbTvlFtA5L6+vfXS73Wm+saxep36odqPRmHIbSLPZPOG3ndXnOXojzISvegdgwTiVMx5O6HjTG2e7fCbH+CnrTDnYz+TbU6dPFgBY2Hy1FQAQMPekcNIeAOiZRVJ0u91rr722fl0URe/p19NrtVqrV6+upy622+3zzjvPt34DwMIzi6N7s9ncsmVLPQnxueeem/m8gffee294eLjZbJ577rlmGwDAgjTr6Zk//PBDVVWzfZLVzp07O53OqX3+FQBw8sz6GD/nb+vWEwCwgJnWAAAESAoAIOC4FyOGhoaGhobuvffek/fe3W53165dJ298AOAvM90Duf/iXfkX8mwPABaM4yYFAMDMmUsBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIKB9qncAABaCoijmsFVVVQtmnOLojQE4nqM/Xv8OH+XG+TuMg6SA6czqs+bv/5FnnPmP4zMTjkdS/E9RHONv45/4kWec4Dj+gQDM0Fw+fxv/qEPCfAYBAGbIWQoAIMBNpABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIkBQAQICkAAACJAUAECApAIAASQEABEgKACBAUgAAAZICAAiQFABAgKQAAAIkBQAQICkAgABJAQAESAoAIEBSAAABkgIACJAUAECApAAAAiQFABAgKQCAAEkBAARICgAgQFIAAAGSAgAIaJ/qHQCAhaYoipM3eFVVJ2/w+fg/6ikN1nCIoIgAAAAASUVORK5CYII=' id='p1img1'>
          </div>


          <div id='id1_1'>
            <P class='p0 ft0'>M/S STT Gadgets</P>
            <P class='p1 ft0'>I.T.I Square, I.G Marg, Near Indradhanu Hotel (Rainbow Hotel), Balasore, 756001</P>
            <P class='p2 ft0'>Email: sttgadgets@gmail.com | Contact: 7008485795/ 7077595902</P>
            <P class='p3 ft1'>Service Request Form</P>
            <P class='p4 ft2'>Data Lost Warning</P>
            <P class='p5 ft3'>You must back up your data before sending your phone for repair, if you are not sure, please call (+91) 7077595902</P>
            <P class='p6 ft2'>Important Reminder</P>
            <P class='p7 ft6'><SPAN class='ft4'>.</SPAN><SPAN class='ft5'>Please remove your SIM card, memory card, stylus and phone accessories before submitting your phone. The repair center and its agents are NOT Allowed to keep these important items. And STT Gadgets is not responsible.</SPAN></P>
            <P class='p8 ft6'><SPAN class='ft4'>.</SPAN><SPAN class='ft5'>As we want to provide best service to you so that we are doing diagnosis to check your device health and for that we are charging you Rs.100/- (If you are not ready to repair after diagnosis). And if you are ready to repair with us and as you are valuable customer we do not charge anything for diagnosis.</SPAN></P>
            <P class='p9 ft6'><SPAN class='ft4'>.</SPAN><SPAN class='ft5'>If you repair your </SPAN><NOBR>under-warranty</NOBR> Smartphone with us then we will not be responsible for tore of warranty conditions of your respective brands.</P>
            <P class='p10 ft2'>Your Contact Details:</P>

            <P class='p5 ft3'>
              Name in full: ______________________________________________________________
              <span style='position: absolute; left: 100px;'>$fullname</span>
              todays Date: ______________________
              <span style='position: absolute; left: 560px;'>$date</span>
            </P>

            <P class='p5 ft3'>
              Physical address: ____________________________________________________________________________________________
              <span style='position: absolute; left: 115px;'>$address</span>
            </P>

            <P class='p5 ft3'>__________________________________________________________________________________________________________</P>
            
            <P class='p11 ft3'>
              Mobile: __________________________________ 
              <span style='position: absolute; left: 68px;'>$mobile</span> 
              Email: ________________________________________________________ 
              <span style='position: absolute; left: 322px;'>$email</span> 
            </P>

            <P class='p5 ft3'>
              Work: _____________________________________ 
              <span style='position: absolute; left: 64px;'>$work</span> 
              DOB: _______________________________________________________ 
              <span style='position: absolute; left: 322px;'>$dob</span> 
            </P>

            <P class='p6 ft2'>Your Mobile Phone Details:</P>

            <P class='p5 ft3'>
              Brand: _______________________ 
              <span style='position: absolute; left: 64px;'>$brand</span> 
              Model: ______________________________________ 
              <span style='position: absolute; left: 252px;'>$model</span> 
              IMEI: _____________________________ 
              <span style='position: absolute; left: 535px;'>$imei</span> 
            </P>

            <P class='p5 ft3'>
              Password or PIN: _____________________________ 
              <span style='position: absolute; left: 130px;'>$password</span>
              what is your budget for repair, please indicate not exceeding Rs. 
              <span class='ft7'> 
                _____________ 
                <span style='position: absolute; left: 640px;'>$rs</span>
              </span>
            </P>
          </div>
          

            <table id='id1_2'>
              <tr>
                <td id='id1_2_1'>
                  <P class='p9 ft2'>Other information (circle the correct answer):</P>
                  <P class='p12 ft3'>Is the phone under warranty? ($warranty)</P>
                  <P class='p13 ft8'>Have this phone been repaired by any one before ($is_repaired) Have you upgraded the phone software? ($is_upgraded)</P>
                </td>
                <td id='id1_2_2'>
                  <P class='p9 ft3'>Are you the original owner of the phone? ($is_owner)</P>
                  <P class='p14 ft8'>Have this phone suffered from impact damage? ($is_impact_damage) Does the phone have liquid damage? ($is_liquid_damage)</P>
                </td>
              </tr>
            </table>


          <div id='id1_3'>
            <P class='p9 ft2'>Please tell us the faults of your mobile phone and you would like us to repair for you (tick as many as possible answers)</P>
            <table cellpadding=0 cellspacing=0 class='t0'>
              <tr>
                <td class='tr0 td0'><P class='p15 ft2'> $prob_turning_on Phone not turning on</P></td>
                <td class='tr0 td1'><P class='p15 ft2'> $prob_charging Phone is not charging</P></td>
                <td class='tr0 td2'><P class='p15 ft2'>$prob_power_btn Power button not working</P></td>
              </tr>
              <tr>
                <td class='tr1 td0'><P class='p15 ft2'>$prob_keypad Keypad not working</P></td>
                <td class='tr1 td1'><P class='p15 ft2'>$prob_joystick Joystick is faulty</P></td>
                <td class='tr1 td2'><P class='p15 ft2'>$prob_hold_charge cannot hold charge</P></td>
              </tr>
              <tr>
                <td class='tr2 td0'><P class='p15 ft2'>$prob_touch Touch screen in not working</P></td>
                <td class='tr2 td1'><P class='p15 ft2'>$prob_datap_ort Data port not working</P></td>
                <td class='tr2 td2'><P class='p15 ft2'>$prob_sim_card cannot read SIM card</P></td>
              </tr>
              <tr>
                <td class='tr2 td0'><P class='p15 ft2'>$prob_lcd LCD is cracked</P></td>
                <td class='tr2 td1'><P class='p15 ft2'>$prob_backlight LCD backlight is not working</P></td>
                <td class='tr2 td2'><P class='p15 ft2'>$prob_ringer Ringer not working</P></td>
              </tr>
              <tr>
                <td class='tr2 td0'><P class='p15 ft2'>$prob_speaker Cannot hear the other party</P></td>
                <td class='tr2 td1'><P class='p15 ft2'>$prob_mic other party cannot hear me</P></td>
                <td class='tr2 td2'><P class='p15 ft2'>$prob_password Forget my phone password</P></td>
              </tr>
              <tr>
                <td class='tr3 td0'><P class='p15 ft2'>$prob_charging_port Charging port is faulty</P></td>
                <td class='tr3 td1'><P class='p15 ft2'>$prob_network Network lock</P></td>
                <td class='tr3 td2'><P class='p15 ft2'>$prob_broken Housing broken</P></td>
              </tr> 
            </table>

            <P class='p12 ft2'>Other Faults:____________________________________________________________________________________<span style='position: absolute; left: 130px;'>$otherFault</span> </P>
            <P class='p16 ft2'>Terms and Conditions:</P>
            <P class='p17 ft9'>**Rs100** inspection fee (counted towards the final repair cost) must be paid before inspection is conducted Owner agreed that all fees due must be paid within thirty (30) days from the date phone is being repair; your phone will be kept in lieu of payment after the thirty (30) days period.</P>
            <P class='p18 ft3'><SPAN class='ft4'>.</SPAN><SPAN class='ft10'>Owner had backup all the important data before handling phone over for inspection or repair.</SPAN></P>
            <P class='p19 ft3'><SPAN class='ft4'>.</SPAN><SPAN class='ft10'>STT Gadgets (MCare), staff or its agent are not liable phones termination (permanent disabled) due to any preexisting conditions</SPAN></P>
            <P class='p20 ft3'>(e.g. water damage, software tempering or impact damage).</P>
            <P class='p18 ft3'><SPAN class='ft4'>.</SPAN><SPAN class='ft10'>Owner must be ready to reply to repair cost confirmation via whatsapp, email or voice call.</SPAN></P>
            <P class='p21 ft12'><SPAN class='ft4'>.</SPAN><SPAN class='ft11'>All repaired device must be paid for in full within thirty (30) days; otherwise the device will kept in lieu of payment. There is no exception to this unless prior written consent was given.</SPAN></P>
            <P class='p22 ft8'><SPAN class='ft4'>.</SPAN><SPAN class='ft13'>STT Gadgets will provide 7 days to 6 months warranty on specific repair work done. Date is counted from the first repair slip given to customer on repaired done.</SPAN></P>

            <table cellpadding=0 cellspacing=0 class='t1'>
              <tr>
                <td class='tr4 td3'><P class='p15 ft3'>I understand and agreed all the terms mentioned above.</P></td>
                <td class='tr4 td4'><P class='p15 ft14'>&nbsp;</P></td>
              </tr>
              <tr>
                <td class='tr2 td3'><P class='p23 ft3'>Sign by:</P></td>
                <td class='tr2 td4'><P class='p15 ft14'>&nbsp;</P></td>
              </tr>
              <tr>
                <td class='tr5 td3'><P class='p15 ft3'>Full Name: ______________________________</P></td>
                <td class='tr5 td4'><P class='p15 ft3'>Date: ___________________________ <span style='position: absolute; left: 540px;'>$date</span></P></td>
              </tr>
            </table>
          </div>
        </div>
      </body>
    </html>";

    // Load HTML content 
    $dompdf->loadHtml($html); 
    $dompdf->set_paper('A4', 'portrait');
    
    $dompdf->render(); 
    
    // Output the generated PDF to Browser 
    $dompdf->stream('IMEI-'.$imei, array('Attachment' => 0));
  }else{
    header("Location: index.php");
  }
?>