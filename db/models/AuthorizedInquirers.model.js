// IMPORTING THE MONGOOSE LIBRARY
const mongoose = require("mongoose")

const authorizedInquirerSchema = new mongoose.Schema({
    firstName: {
        type: String,
        required: true,
      },
      lastName: {
        type: String,
        required: true,
      },
      email: {
        type: String,
        required: true,
        lowercase: true
      },
      companyAddress: {
        street: String,
        city: String,
      },
      password: {
        type: String,
      },
      createdAt: Date,
      updatedAt: Date,
})


// DEFINING A MODEL FOR THE SCHEMA

module.exports = mongoose.model("Citizens", citizenSchema)



