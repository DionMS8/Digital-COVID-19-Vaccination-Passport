//===>IMPORTING THE MONGOOSE LIBRARY<=====================================================================================

import mongoose from "mongoose";
const Schema = mongoose.Schema;

//===>DEFINING THE MONGOOSE SCHEMA FOR THE CITIZEN COLLECTION<==========================================================

const citizenSchema = new Schema({

    fname: {
        type: String,
        required: true
    },
    lname: {
        type: String,
        required: true
    },
    gender: {
        type: String,
        required: true
    },
    email: {
        type: String,
        required: true,
        unique: true,
        lowercase: true,
    },
    password: {
        type: String,
        required: true,
        minLength: 8,
        maxLength: 100,
    },
    phone: {
        type: String,
        required: true
    },
    address: {
        type: String,
        required: true
    },
    timestamps: true
});


//===DEFINING A MODEL FOR THE CITIZEN SCHEMA===========================================================================

const Citizen = mongoose.model("Citizen", citizenSchema)


//===EXPORTING THE CITIZEN MODEL SO IT CAN BE USED ELSEWHERE IN THE PROJECT==================================================

module.exports = Citizen;






