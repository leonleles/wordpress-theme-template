# wordpress-template
  Wordpress theme development template

# dependencies
  * Docker (https://docs.docker.com/get-docker/)

# scripts
* start docker container: `bash start.sh`;
* start the webpack in the `public/wp-content/themes/wordpress-template` to create your theme:
     * `npm run watch` development;
     * `npm run build` production;

# get started
  Change theme name in files:
  * public/.gitignore line 72

# helper docker
* Delete all stopped containers: `bash clean.sh`
