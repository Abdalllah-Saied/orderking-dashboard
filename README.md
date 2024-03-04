# OrderKing Dashboard

This repository contains a Laravel project for the OrderKing Backoffice/Dashboard. The dashboard is designed for restaurant owners/merchants, providing separate interfaces for superadmins, merchants, and users.

## Multi-Tenancy Implementation

### Approach

The project is built using a single-database multi-tenancy approach. Each tenant (merchant) is associated with a unique domain, allowing them to operate independently within the same database. Tenant identification is based on the domain, and the `tenant_id` field is used to establish relationships between tenants and other entities.

### Implementation

1. **Database Structure:**
   - The database includes tables for tenants (`merchants`), users (`users`), and other relevant entities.

2. **Models:**
   - The `Tenant` model represents a merchant and is associated with the `users` table using the Eloquent ORM.

3. **Middleware:**
   - The `TenantMiddleware` is used to identify the current tenant based on the request's domain and set the `tenant_id` for the current request.

4. **Seeders:**
   - Seeders are created to populate the database with a superadmin, merchants, and users.

## Dashboard Separation

### Superadmin Dashboard

- A superadmin dashboard (`SuperadminController`) is implemented to show all merchants and their associated users.

### Merchant Dashboard

- A merchant dashboard (`MerchantController`) is implemented to display all users associated with the current merchant.

### User Dashboard

- A user dashboard is implemented to show the user's status, which is dynamically updated using WebSockets.

## WebSockets Implementation

WebSockets are used to provide real-time updates to users and merchants. When a user registers at a merchant's domain, their status is initially set to "unapproved." The merchant can then approve the user, updating their status to "approved" in real-time.


### Credentials

#### Superadmin
- Email: superadmin@example.com
- Password: password

#### Merchants
1. Merchant 1:
   - Email: merchant1@example.com
   - Password: password

2. Merchant 2:
   - Email: merchant2@example.com
   - Password: password

#### User
- Email: user@example.com
- Password: password


The system includes a superadmin role to manage and oversee the entire OrderKing system. The superadmin has the authority to approve users and has a global view of all merchants and their associated users.

The separation between superadmin, merchants, and users is achieved through a dedicated entry in the `tenants` table. The first record in the `tenants` table is assigned the domain "superadmin." This special merchant serves as the superadmin and is granted elevated permissions, allowing full control over the system.

---
