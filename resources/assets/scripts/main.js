// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import fontawesome from '@fortawesome/fontawesome';
import { fab } from '@fortawesome/fontawesome-free-brands';
import { far } from '@fortawesome/fontawesome-free-regular';
import { fas } from '@fortawesome/fontawesome-free-solid';

fontawesome.library.add( fab, far, fas );

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
