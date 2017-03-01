// Create panel of top news stories
//

$.getJSON('news/top_news.json', function(jdata) {
  var html = '';
  $(jdata.news).each( function(index, rec) {
    //console.log(index,rec.excerpt);
    //html += '<hr class="top-news-line" />';
    html += '<div class="row top-news">';
    if ( rec.thumbnail_url )
    {
      html += '<div class="col-xs-4 col-md-4 col-lg-3">';
      html += '<a class="hide-ext-link" href="' + rec.url + '"><img src="http://www.petehanna.com/sentient' + rec.thumbnail_url + '" width="100%"></a>&nbsp;&nbsp;';
      //html += '<img class="no-resize" src="' + rec.thumbnail_url + '" width="100" />&nbsp;&nbsp;';
      html += '<p class="read-more"><a href="' + rec.url + '">[full story]</a></p>';
      html += '</div><div class="col-xs-8 col-md-8 col-lg-9">';
    }
    else
    {
      html += '<div class="col-xs-12">';
    }
    html += '<h5 class="subheader">';
    html += '<a href="' + rec.url + '">' + rec.title + '</a>';
    html += '<br/><span class="news-date">' + rec.date + '</span>';
    html += '</h5>';
    //html += '<p>' + rec.excerpt + '</p>';
    html += rec.excerpt;
    if ( ! rec.thumbnail_url )
    {
      html += '<p class="read-more"><a href="' + rec.url + '">[full story]</a></p>';
    }
    html += '</div>';
    html += '</div>';
  });
  $('#top_news').append(html);
  //
  // Add target="_blank" to external URLs:
  // (NOTE: needed here apparently as well as in the footer-code)
  $('a[href^="http"]').attr('target','_blank');
});