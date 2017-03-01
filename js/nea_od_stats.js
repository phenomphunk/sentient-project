// Create NEA totals stats table and NEA orbits-computed stats table:
//

$.getJSON('stats/nea_totals.json', function(jdata) {
  $('#nea_stats_date').append(jdata.dataDate);
  var html = '';
  html += '<thead>';
  html += '<tr>';
  html += '<th colspan="2" class="text-center">Known NEAs</th>';
  html += '</tr>';
  html += '</thead>';
  html += '<tbody>';
  html += '<tr>';
  html += '<td class="align-right">' + jdata['1km+'] + '</td>';
  html += '<td class="align-left">' + '1&nbsp;km and larger' + '</td>';
  html += '</tr>';
  html += '<tr>';
  html += '<td class="align-right">' + jdata['140m+'] + '</td>';
  html += '<td class="align-left">' + '140&nbsp;m and larger' + '</td>';
  html += '</tr>';
  html += '<tr>';
  html += '<td class="align-right">' + jdata.all + '</td>';
  html += '<td class="align-left">' + 'all sizes' + '</td>';
  html += '</tr>';
  html += '</tbody>';
  $('#nea_totals').append(html);
}).fail(function() {
  var html = '';
  html += '<thead>';
  html += '<tr>';
  html += '<th class="text-center">Known NEAs</th>';
  html += '</tr>';
  html += '</thead>';
  html += '<tbody>';
  html += '<tr>';
  html += '<td class="text-center"><i>currently unavailable</i></td>';
  html += '</tr>';
  html += '</tbody>';
  $('#nea_totals').append(html);
});

$.getJSON('stats/nea_od_stats.json', function(jdata) {
  var html = '';
  html += '<thead>';
  html += '<tr>';
  html += '<th colspan="2" class="text-center">Orbits Computed</th>';
  html += '</tr>';
  html += '</thead>';
  html += '<tbody>';
  html += '<tr>';
  html += '<td class="align-right">' + jdata.month.count + '</td>';
  html += '<td class="align-left">' + 'last month (' + jdata.month.name + ')</td>';
  html += '</tr>';
  html += '<tr>';
  html += '<td class="align-right">' + jdata.year.count + '</td>';
  html += '<td class="align-left">' + 'last year (' + jdata.year.year + ')</td>';
  html += '</tr>';
  html += '</tbody>';
  $('#nea_od_stats').append(html);
}).fail(function() {
  var html = '';
  html += '<thead>';
  html += '<tr>';
  html += '<th class="text-center">Orbits Computed</th>';
  html += '</tr>';
  html += '</thead>';
  html += '<tbody>';
  html += '<tr>';
  html += '<td class="text-center"><i>currently unavailable</i></td>';
  html += '</tr>';
  html += '</tbody>';
  $('#nea_od_stats').append(html);
});