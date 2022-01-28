// IMPORTING THE MONGOOSE LIBRARY
import mongoose from "mongoose";
const Schema = mongoose.Schema;

//===[DEFINING THE MONGOOSE SCHEMA FOR THE CITIZEN COLLECTION]==========================================================

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


// DEFINING A MODEL FOR THE CITIZEN SCHEMA
const Citizen = mongoose.model("Citizen", citizenSchema)

// EXPORTING THE CITIZEN MODEL SO IT CAN BE USED ELSEWHERE IN THE PROJECT
module.exports = Citizen;


//===[CREATING A NEW CITIZEN INSTANCE IN THE DB]==========================================================================

app.get("/citizen-register", (req, res) => {
    const citizen = new Citizen({
        fname: "John",
        lname: "Doe",
        gender: "Male  ",
        email: "123@hotmail.com",
        password: "12345678",
        phone: "1234567890",
        address: "123 Street",
    });

    // SAVING THE DOCUMENT TO THE CORRESPONDING COLLECTION FOR THE MODEL
    citizen.save()
    .then(result => {
        res.send(result);
    })
    .catch(err => {
        console.log(err);
    });
});

app.get('/all-citizens', (req, res) => {
    Citizen.find()
      .then(result => {
        res.send(result);
      })
      .catch(err => {
        console.log(err);
      });
  });

app.get('/single-doc', (req, res) => {
  Model.findById('5ea99b49b8531f40c0fde689')
    .then(result => {
      res.send(result);
    })
    .catch(err => {
      console.log(err);
    });
});







