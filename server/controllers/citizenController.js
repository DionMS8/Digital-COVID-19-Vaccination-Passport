//=====[CITIZEN CONTROLLER]====================================================================================================

//===[CREATING A NEW CITIZEN INSTANCE IN THE DB]==========================================================================

import Citizen from ('../models/citizen.model.js');

const Citizen = Citizen 



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









const Blog = require('../models/blog');

const blog_index = (req, res) => {
  Blog.find().sort({ createdAt: -1 })
    .then(result => {
      res.render('index', { blogs: result, title: 'All blogs' });
    })
    .catch(err => {
      console.log(err);
    });
}

const blog_details = (req, res) => {
  const id = req.params.id;
  Blog.findById(id)
    .then(result => {
      res.render('details', { blog: result, title: 'Blog Details' });
    })
    .catch(err => {
      console.log(err);
    });
}

const blog_create_get = (req, res) => {
  res.render('create', { title: 'Create a new blog' });
}

const blog_create_post = (req, res) => {
  const blog = new Blog(req.body);
  blog.save()
    .then(result => {
      res.redirect('/blogs');
    })
    .catch(err => {
      console.log(err);
    });
}

const blog_delete = (req, res) => {
  const id = req.params.id;
  Blog.findByIdAndDelete(id)
    .then(result => {
      res.json({ redirect: '/blogs' });
    })
    .catch(err => {
      console.log(err);
    });
}

module.exports = {
  blog_index, 
  blog_details, 
  blog_create_get, 
  blog_create_post, 
  blog_delete
}


