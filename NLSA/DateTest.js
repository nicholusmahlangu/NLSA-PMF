function validateDateFormat(input) {
    // Regular expression to match the format dd-mm-yyyy
    var dateFormat = /^\d{2}-\d{2}-\d{4}$/;
    
    if (dateFormat.test(input)) {
      // Split the input by "-" to check each part
      var parts = input.split('-');
      var day = parseInt(parts[0], 10);
      var month = parseInt(parts[1], 10);
      var year = parseInt(parts[2], 10);
      
      // Validate day, month, and year ranges
      if (year >= 1000 && year <= 9999 && month >= 1 && month <= 12 && day >= 1 && day <= new Date(year, month, 0).getDate()) {
        return true; // Valid date format
      }
    }
    
    return false; // Invalid date format
  }
  
  // Example usage
  var dateInput = "16-04-2024";
  if (validateDateFormat(dateInput)) {
    console.log("Valid date format");
  } else {
    console.log("Invalid date format");
  }