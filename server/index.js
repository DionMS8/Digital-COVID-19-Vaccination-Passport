// LOADING IN THE NPM DEPENDENCIES
import express from 'express';
import bodyParser from 'body-parser';
import mongoose from 'mongoose';
import cors from "cors";

// LOADING IN THE ROUTES
import citizenRoutes from './routes/citizenRoutes.js';
import inquirerRoutes from './routes/inquirer'
import mohRoutes from './routes/mohRoutes.js';
import vaxAdminRoutes from './routes/adminRoutes.js';

// INSTANTIATING AN EXPRESS OBJECT
const app = express();

// SETTING UP MIDDLEWARE
app.use(bodyParser.json({ limit: "30mb", extended: true }));
app.use(bodyParser.urlencoded({ limit: "30mb", extended: true }));
app.use(cors());

// CREATING ENV VARIABLES
const CONNECTION_URL = "mongodb+srv://dionms8:Super$aiyangodms8@cluster0.3pisg.mongodb.net/myFirstDatabase?retryWrites=true&w=majority"
const PORT = process.env.PORT || 5000;

// CONNECTING TO THE DATABASE WITH MONGOOSE
mongoose.connect(CONNECTION_URL, { useNewUrlParser: true, useUnifiedTopology: true })
    .then(() => app.listen(PORT, () => console.log(`Server is listening on port ${PORT}`)) )
    .catch((error) => console.log(error.message));


