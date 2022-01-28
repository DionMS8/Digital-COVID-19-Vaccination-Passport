// IMPORTING THE MONGOOSE LIBRARY
const mongoose = require("mongoose");

// DEFINING THE MONGOOSE SCHEMA
// NOTE: DATA TYPES AND SCHEMA VALIDATION ARE ADDED HERE

const citizenSchema = new mongoose.Schema({
    firstName: {
        type: String,
        required: true,
      },
      lastName: {
        type: String,
        required: true,
      },
      gender: {
        type: String,
        required: true,
      },
      email: {
        type: String,
        required: true,
        lowercase: true
      },
      address: {
        street: String,
        city: String,
      },
      password: {
        type: String,
        required: true,
        minLength: 8,
        maxLength: 100,
      },
      createdAt: {
        type: Date,
        default: () => Date.now(),
        immutable: true,
      },
      updatedAt: {
        type: Date,
        default: () => Date.now(),
        immutable: true,
      },
})


// DEFINING A MODEL FOR THE SCHEMA

module.exports = mongoose.model("Citizens", citizenSchema)









