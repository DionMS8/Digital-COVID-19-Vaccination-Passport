//===[ALL ROUTES ASSOCIATED WITH THE CITIZENS]========

import { Router } from 'express';
import { 
    blog_create_get, 
    blog_index, 
    citizen_create_post, 
    blog_details, 
    citizen_delete 
} from "../controllers/citizenController.js";

const router = Router();

router.get('/create', blog_create_get);
router.get('/', blog_index);
router.post('/', citizen_create_post);
router.get('/:id', blog_details);
router.delete('/:id', citizen_delete);

// EXPORTING THE ROUTER
export default router;



