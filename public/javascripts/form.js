$("#inputForm").submit(function(e)
{
  var postData = $(this).serializeArray();
  var url = '/romannumeral/generate';

  if (postData[0].value === 'tobaseten') {
    url = '/romannumeral/parse';
  }

  $.ajax(
    {
      url : url,
      type: "POST",
      data : {numeral: postData[1].value},
      success:function(data, textStatus, jqXHR)
      {
        var result = 'Invalid input, please try again.';
        if (data.result !== false && data.result !== 0) {
          result = data.result;
        }

        $('#result').text(result);
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        console.log('Something went wrong.')
      }
    });
  e.preventDefault();
});
