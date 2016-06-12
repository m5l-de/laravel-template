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



# Generate Master and Slave Blade 

### Sections

1. meta
    title, description etc
2. style
    for any style (after the main css file)
3. content
4. script
    for any scripts (after the main js file)

### Master Templates
_/layouts_

Two Layouts. The App for the frontend. The Admin for any backend related.  
Use the elixir function to include one css and one js file

**1. App**
header and footer in _"layouts/app/"_

**2. Admin**
navbar in _"layouts/admin"_
