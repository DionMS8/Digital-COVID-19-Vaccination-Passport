// ALL ROUTES ASSOCIATED WITH THE CITIZEN

import { Router } from "express";
import { 
    blog_create_get, 
    blog_index, 
    citizen_create_post, 
    citizen_delete 
} from "../controllers/citizenController.js";

// CREATING A ROUTER OBJECT 
const router = Router();

// DEFINING THE ROUTES
router.get('/create', blog_create_get);
router.get('/', blog_index);
router.post('/', citizen_create_post);
router.delete('/:id', citizen_delete);

// EXPORTING THE ROUTER OBJECT
export default router;







