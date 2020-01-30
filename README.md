## Steps:
1. Make a clone of this git repo using: 
   ```
   git clone
   ```

2. Make a copy of .env.example file and rename it to .env

3. Configure the Database in the .env file.

4. Run the command 
   ```
   composer update
   ```

5. Generate the Key using 
   ```
   php artisan key:generate
   ```

6. Migrate the table to DB using 
   ```
   php artisan migrate
   ```

7. Run the server using 
   ```
   php artisan server
   ```
