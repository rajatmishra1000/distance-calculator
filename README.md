Application to calculate distance between two postal codes in India.

Installation steps:-
1. Download or clone the repository.
2. Set up database credentials on .env file
3. Run commands -
    1. php artisan migrate
    2. php artisan db:seed
    3. php artisan optimize
    4. php artisan serve


Steps for calculating distance between two pincodes manually
1. Insert or upload postal codes data.
2. You can get pincodes data from https://data.gov.in/catalog/all-india-pincode-directory-through-webservice?filters%5Bfield_catalog_reference%5D=6818284&format=json&offset=0&limit=6&sort%5Bcreated%5D=desc

Steps for calculating driving distance between two pincodes using distance matrix api
1. Go to https://www.microsoft.com/en-us/maps/create-a-bing-maps-key/ to get Api Key.
2. In your .env file create a variable named BING_DISTANCE_MATRIX_KEY=your-api-key
3. And that's it.
