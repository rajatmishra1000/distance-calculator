Application to calculate distance between two postal codes in India.

Installation steps:-
1. Download or clone the repository.
2. Set up database credentials on .env file
3. Run commands -
    php artisan migrate
    php artisan db:seed
    php artisan optimize
    php artisan serve


Steps for calculating distance between two pincodes manually
1. Insert or upload postal codes data.
2. You can get pincodes data from https://data.gov.in/catalog/all-india-pincode-directory-through-webservice?filters%5Bfield_catalog_reference%5D=6818284&format=json&offset=0&limit=6&sort%5Bcreated%5D=desc

Steps for calculating driving distance between two pincodes using distance matrix api
1. Go to https://docs.microsoft.com/en-us/bingmaps/rest-services/routes/calculate-a-distance-matrix to get Api Key.
2. In your .env file create a variable named BING_DISTANCE_MATRIX_KEY=your-api-key
3. And that's it.