This is a website builder app that is still under development.

To deploy the app, first, clone this repo.

Next, create your own firebase realtime database and your personal key.
Rename the personal key to firebase.json and copy it into the root directory of the project.

Then, inside the .env do these changes:
FIREBASE_CREDENTIALS="firebase.json"
FIREBASE_DATABASE_URL="<write_your_database_url_here>"

Finally, run the following commands:
php artisan serve
npm run build