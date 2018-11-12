<form name="ivForm">
<div id="error_chunk" style="color:red;"></div>
<table cellpadding="4" cellspacing="0">
  <tbody><tr style="background:#ddd;" class="header_row">
    <td>Row</td>
    <td>Starting Time (HH:MM)</td>
    <td>Ending Time (HH:MM)</td>
    <td>Lunch/Breaks(HH:MM)</td>
    <td>Calculated Total</td>
  </tr>
<script type="text/javascript"><!--
for(var i=1; i<6; i++){
  var html = ''
  +'  <tr style="background:#eee;">'
  +'    <td><u>'+i+'</u></td>'
  +'    <td><input name="start_hr'+i+'" value="00" class="t1" onchange="if(!this.init) this.init=1; return calc(this)" accesskey="'+i+'"> :'
  +'        <input name="start_min'+i+'" value="00" class="t1" onchange="return calc(this)"> '
  +'        <select name="start_time'+i+'" onchange="return calc(this)">'
  +'        <option>AM<option>PM'
  +'        </select>'
  +'    </td>'
  +'    <td><input name="end_hr'+i+'" value="00" class="t1" onchange="if(!this.init){ this.init=1; this.form.end_time'+i+'.options.selectedIndex=1; }; return calc(this)"> :'
  +'        <input name="end_min'+i+'" value="00" class="t1" onchange="return calc(this)"> '
  +'        <select name="end_time'+i+'" onchange="return calc(this)">'
  +'        <option>AM<option>PM'
  +'        </select>'
  +'    </td>'
  +'    <td><input name="break_hr'+i+'" value="00" class="t1" onchange="return calc(this)"> :'
  +'        <input name="break_min'+i+'" value="00" class="t1" onchange="return calc(this)"> '
  +'    </td>'
  +'    <td><div id="stot'+i+'"></div></td>'
  +'  </tr>'
  document.write(html)
}
//--></script>  <tr style="background:#eee;">    <td><u>1</u></td>    <td><input name="start_hr1" value="00" class="t1" onchange="if(!this.init) this.init=1; return calc(this)" accesskey="1"> :        <input name="start_min1" value="00" class="t1" onchange="return calc(this)">         <select name="start_time1" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="end_hr1" value="00" class="t1" onchange="if(!this.init){ this.init=1; this.form.end_time1.options.selectedIndex=1; }; return calc(this)"> :        <input name="end_min1" value="00" class="t1" onchange="return calc(this)">         <select name="end_time1" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="break_hr1" value="00" class="t1" onchange="return calc(this)"> :        <input name="break_min1" value="00" class="t1" onchange="return calc(this)">     </td>    <td><div id="stot1">0.00</div></td>  </tr>  <tr style="background:#eee;">    <td><u>2</u></td>    <td><input name="start_hr2" value="00" class="t1" onchange="if(!this.init) this.init=1; return calc(this)" accesskey="2"> :        <input name="start_min2" value="00" class="t1" onchange="return calc(this)">         <select name="start_time2" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="end_hr2" value="00" class="t1" onchange="if(!this.init){ this.init=1; this.form.end_time2.options.selectedIndex=1; }; return calc(this)"> :        <input name="end_min2" value="00" class="t1" onchange="return calc(this)">         <select name="end_time2" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="break_hr2" value="00" class="t1" onchange="return calc(this)"> :        <input name="break_min2" value="00" class="t1" onchange="return calc(this)">     </td>    <td><div id="stot2">0.00</div></td>  </tr>  <tr style="background:#eee;">    <td><u>3</u></td>    <td><input name="start_hr3" value="00" class="t1" onchange="if(!this.init) this.init=1; return calc(this)" accesskey="3"> :        <input name="start_min3" value="00" class="t1" onchange="return calc(this)">         <select name="start_time3" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="end_hr3" value="00" class="t1" onchange="if(!this.init){ this.init=1; this.form.end_time3.options.selectedIndex=1; }; return calc(this)"> :        <input name="end_min3" value="00" class="t1" onchange="return calc(this)">         <select name="end_time3" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="break_hr3" value="00" class="t1" onchange="return calc(this)"> :        <input name="break_min3" value="00" class="t1" onchange="return calc(this)">     </td>    <td><div id="stot3">0.00</div></td>  </tr>  <tr style="background:#eee;">    <td><u>4</u></td>    <td><input name="start_hr4" value="00" class="t1" onchange="if(!this.init) this.init=1; return calc(this)" accesskey="4"> :        <input name="start_min4" value="00" class="t1" onchange="return calc(this)">         <select name="start_time4" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="end_hr4" value="00" class="t1" onchange="if(!this.init){ this.init=1; this.form.end_time4.options.selectedIndex=1; }; return calc(this)"> :        <input name="end_min4" value="00" class="t1" onchange="return calc(this)">         <select name="end_time4" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="break_hr4" value="00" class="t1" onchange="return calc(this)"> :        <input name="break_min4" value="00" class="t1" onchange="return calc(this)">     </td>    <td><div id="stot4">0.00</div></td>  </tr>  <tr style="background:#eee;">    <td><u>5</u></td>    <td><input name="start_hr5" value="00" class="t1" onchange="if(!this.init) this.init=1; return calc(this)" accesskey="5"> :        <input name="start_min5" value="00" class="t1" onchange="return calc(this)">         <select name="start_time5" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="end_hr5" value="00" class="t1" onchange="if(!this.init){ this.init=1; this.form.end_time5.options.selectedIndex=1; }; return calc(this)"> :        <input name="end_min5" value="00" class="t1" onchange="return calc(this)">         <select name="end_time5" onchange="return calc(this)">        <option>AM</option><option>PM        </option></select>    </td>    <td><input name="break_hr5" value="00" class="t1" onchange="return calc(this)"> :        <input name="break_min5" value="00" class="t1" onchange="return calc(this)">     </td>    <td><div id="stot5">0.00</div></td>  </tr>
  <tr>
    <td colspan="5" align="right" id="stots"><b>Total Hrs = 0</b></td>
  </tr>
</tbody></table>
<br><input type="button" name="mcalc" value="Calculate" onclick="
  /* walk through the rows, use known input to generate cases for calc to operate on */
  f = this.form; for(var i=0; i<f.elements.length; i++){
    if(f.elements[i].name.match(/start_hr/)){ calc(f.elements[i]); }
  }  
  cal_days_sum()
">

<script type="text/javascript"><!--
err = function(msg,obj){
  /* global error handler */
  errobj = document.getElementById('error_chunk')
  errobj.innerHTML = msg
  if(obj){
    window.errObj = obj;
    setTimeout('if(window.errObj.focus){window.errObj.focus();}if(window.errObj.select){window.errObj.select();} window.errObj=0;',250)
  }
  return false;
}


validate = function(obj){
  tmp = parseInt(obj.value)
  //if(tmp.length<1) obj.value='00'; return

  if(obj.name.match(/(start|end)_min/)){
    if(tmp<0 || tmp>59){ return err('Minutes must be between 00 and 59', obj); }
  }
  else if(obj.name.match(/(start|end)_hr/) && obj.init){
    if(tmp<1 || tmp>12){ return err('Hour must be between 01 and 12', obj); }
  } 
}


cal_days_sum = function(){
  /* sum the hours column(s) and give a total of the hours shown -- mainly for multiple days */
  if(!this.arr){
    this.arr = new Array()
    var tmparr = document.getElementsByTagName('div')
    for(var i=0; i<tmparr.length; i++){
      if(tmparr[i].id.match(/^stot/)) this.arr.push(tmparr[i])
    }
  }
  var sum = 0
  for(var i=0; i<this.arr.length; i++){
    sum += parseFloat(this.arr[i].innerHTML)
  }
  obj = document.getElementById('stots')
  obj.innerHTML = '<b>Total Hrs = '+sum+'</b>'
}


calc = function(obj){
  /* get the sibling objects */
  objN = obj.name.match(/\d+$/); //get the object number so we can find it's siblings
  f = obj.form
  start_hr = eval('f.start_hr'+objN)
  start_min = eval('f.start_min'+objN)
  start_time = eval('f.start_time'+objN)
  end_hr = eval('f.end_hr'+objN)
  end_min = eval('f.end_min'+objN)
  end_time = eval('f.end_time'+objN)
  break_hr = eval('f.break_hr'+objN)
  break_min = eval('f.break_min'+objN)


  /* validate hour and minute limits */
  err(''); /* clear error */
  t = start_hr; validate(t)
  t = start_min; validate(t)
  t = end_hr; validate(t)
  t = end_min; validate(t)
  t = break_hr; validate(t)
  t = break_min; validate(t)


  /* convert to 24 hour */
  start_hr.val = parseInt(start_hr.value); //force it to be a number
  if(start_time.options[start_time.selectedIndex].text.match(/PM/,'i')) start_hr.val += 12;
  end_hr.val = parseInt(end_hr.value); 
  if(end_time.options[end_time.selectedIndex].text.match(/PM/,'i')) end_hr.val += 12;
  break_hr.val = parseInt(break_hr.value);
  tot_hr = (end_hr.val - start_hr.val - break_hr.val)

  /* convert minutes from 60 to 100 */
  start_min.val = parseFloat(start_min.value) / 60
  end_min.val = parseFloat(end_min.value) / 60
  break_min.val = parseFloat(break_min.value) / 60
  tot_min = (end_min.val - start_min.val - break_min.val) 

  /* accommodate graveyard */
  if(start_hr.val > end_hr.val){
    end_hr.val += 24
    tot_hr = (end_hr.val - start_hr.val)
  }

  t = parseFloat(parseFloat(tot_hr) + parseFloat(tot_min))
  if(t<0) t = 'NA' 
  else{
    // need a decimal point + two digits to it's right
    if(!t.toString().match(/\./)) t+= '.00' 
    else if(!t.toString().match(/.+\.[0-9][0-9]/)){
      t+='00'
    }
    t = t.toString().match(/.+\.[0-9][0-9]/)
  }
  //alert(start_hr.val +'--'+ end_hr.val+'--tot_hr='+tot_hr+'--tot_min='+tot_min+'--t='+t)
  obj = document.getElementById('stot'+objN); 
  if(errobj && errobj.innerHTML) t = 'NA'
  obj.innerHTML = t

  cal_days_sum()
}

/* start by forcing a calc */
document.ivForm.mcalc.click()
//--></script>
</form>