# Laravel Template

## 1. Clean up the Routes

**PageController**
The first Controller "PageController" is for static pages, like the home page or contact etc.
- no special middleware
- no group
- no namespace

**Main/MainController**
For the main pages, that requires auth.
- auth
- namespace: Main

**Profile/ProfileController**
- middleware: auth
- namespace: Profile
- prefix: /profile

**Admin/AdminController**
For admin only pages.
- middleware: admin 
- namespace: Admin
- prefix: /admin

**Api/ApiController**
For Api Access.
- middleware: auth:api
- namespace: api
- prefix /api/v1



