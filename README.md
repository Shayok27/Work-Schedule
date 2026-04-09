# Work-Schedule
Full Stack Code for Uploading and Viewing work schedule
Project Overview (What you’re building)

A web-based scheduling system with:
    •    User signup (email + password)
    •    User profile form (name, phone, role, gender)
    •    Auto-generated unique ID
    •    Login system
    •    Two roles:
    •    Regular User → can view weekly schedule
    •    Authority/Admin → can approve users & edit schedules
    •    Weekly schedules only
Unique ID Generation

YEAR + RANDOM + USER_ID
    •    Example: 2026-83921
Pages / Screens Need

Public
    •    Landing/Home page
    •    Sign up page
    •    Login page

After Login (User)
    •    Profile summary
    •    Weekly schedule view

After Login (Authority)
    •    Pending approvals page
    •    User list
    •    Schedule editor (weekly)
    •    Schedule viewer (by user)
Security Rules 

✔ Hash passwords
✔ Validate email format
✔ Protect routes (login required)
✔ Authority-only routes locked
✔ Passkey never stored in plain text
✔ No user can edit another user’s data
