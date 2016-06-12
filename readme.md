# Laravel Template

## 1. Clean up the Routes / Controller / Views

**PageController**
The first Controller "PageController" is for static pages, like the home page or contact etc.
- no special middleware
- no group
- no namespace
- views: /pages

**Main/MainController**
For the main pages, that requires auth.
- middleware: auth
- namespace: Main
- views: /main

**Profile/ProfileController**
- middleware: auth
- namespace: Profile
- prefix: /profile
- views: /profile

**Admin/AdminController**
For admin only pages.
- middleware: admin 
- namespace: Admin
- prefix: /admin
- views: /admin

**Api/ApiController**
For Api Access.
- middleware: auth:api
- namespace: api
- prefix /api/v1




