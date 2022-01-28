const mongoose = require("mongoose")

mongoose.connect("mongodb://localhost:27017/testdb", 
{ useNewUrlParser: true }).then(() => {
    console.log("Connected to MongoDB");
}).catch((e) => {
    console.log("Error Connecting to MongoDB: " + e);
});

module.exports = {
    mongoose
  };
  
  
  
  



  