export function makeAJAXRequest(
  url,
  request_method,
  data_type,
  data,
  success_function,
  error_function
) {
  $.ajax({
    url: url,
    method: request_method,
    dataType: data_type,
    data: data,
    success: success_function,
    error: error_function,
  });
}
