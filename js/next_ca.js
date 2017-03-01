// Create next close-approach front-page table
//

$.getJSON('ca/next_10ld_ca_event.json', function(jdata) {
  var rec = jdata.data[0];
  //console.log(rec);
  var ld = 389.17;  // LD per au
  var dist = rec[4] * ld;
  var h = parseFloat(rec[10]);
  var min_dist = rec[5] * ld;
  var sbdb_url = 'http://ssd.jpl.nasa.gov/sbdb.cgi?sstr=';
  var html = '';
  html += '<thead>';
  html += '<tr>';
  html += '<th colspan="2" class="align-center">Next NEO Close&nbsp;Approach<br/>within 10 Lunar Distances (LD)</th>';
  html += '</tr>';
  html += '</thead>';
  html += '<tbody>';
  //
  // Object:
  html += '<tr>';
  html += '<td class="align-right">Object:</td>';
  html += '<td class="align-left"><a href="' + sbdb_url + rec[0] + '">' + rec[0] + '</a></td>';
  html += '</tr>';
  //
  // Date:
  html += '<tr valign="top">';
  html += '<td class="align-right">Date:</td>';
  html += '<td class="align-left">' + rec[3] + '<br/>&plusmn; ' + rec[9];
  if ( /_/.test(rec[9]) ) { html += ' (d_hh:mm)'; }
  else { html += ' (hh:mm)'; }
  html += '</td>';
  html += '</tr>';
  //
  // Distance:
  html += '<tr>';
  html += '<td class="align-right">Dist:</td>';
  html += '<td class="align-left">' + dist.toPrecision(3) + ' LD (min: ' + min_dist.toPrecision(3) + ' LD)</td>';
  html += '</tr>';
  //
  // H:
  html += '<tr>';
  html += '<td class="align-right">H:</td>';
  html += '<td class="align-left">' + h.toFixed(1) + '</td>';
  html += '</tr>';
  //
  html += '</tbody>';
  $('#next_ca').append(html);
}).fail(function() {
  var html = '';
  html += '<thead>';
  html += '<tr>';
  html += '<th class="align-center">Next NEO Close&nbsp;Approach<br/>within 10 Lunar Distances (LD)</th>';
  html += '</tr>';
  html += '</thead>';
  html += '<tbody>';
  html += '<tr>';
  html += '<td class="text-center"><i>currently unavailable</i></td>';
  html += '</tr>';
  html += '</tbody>';
  $('#next_ca').append(html);
});