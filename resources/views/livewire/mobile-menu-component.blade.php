<div>
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">Menu</div>
                <button type="button" class="mobilemenu__close">
                    <i class="fa fa-remove"></i>
                </button>
            </div>
            <div class="mobilemenu__content">
                <ul class="mobile-links mobile-links--level--0" data-collapse
                    data-collapse-opened-class="mobile-links__item--open">
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="{{ route('home') }}" class="mobile-links__item-link">Home</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="{{ route('about') }}" class="mobile-links__item-link">About</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="{{ route('contact') }}" class="mobile-links__item-link">Contact</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="{{ route('contact') }}#map-location" class="mobile-links__item-link">Location</a>
                        </div>
                    </li>
                    {{-- <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="#" class="mobile-links__item-link">Categories</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">Power Tools</a>
                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                      <i class="fa fa-angle-down"></i>
                    </button>
                  </div>
                  <div class="mobile-links__item-sub-links" data-collapse-content>
                    <ul class="mobile-links mobile-links--level--2">
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Engravers</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Wrenches</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Wall Chaser</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Pneumatic Tools</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">Machine Tools</a>
                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                      <i class="fa fa-angle-down"></i>
                    </button>
                  </div>
                  <div class="mobile-links__item-sub-links" data-collapse-content>
                    <ul class="mobile-links mobile-links--level--2">
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Thread Cutting</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Chip Blowers</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Sharpening Machines</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Pipe Cutters</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Slotting machines</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Lathes</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop Grid</a>
                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                      <i class="fa fa-angle-down"></i>
                    </button>
                  </div>
                  <div class="mobile-links__item-sub-links" data-collapse-content>
                    <ul class="mobile-links mobile-links--level--2">
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">3 Columns
                            Sidebar</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="shop-grid-4-columns-full.html" class="mobile-links__item-link">4 Columns Full</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="shop-grid-5-columns-full.html" class="mobile-links__item-link">5 Columns Full</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="shop-list.html" class="mobile-links__item-link">Shop List</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="shop-right-sidebar.html" class="mobile-links__item-link">Shop Right Sidebar</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="product.html" class="mobile-links__item-link">Product</a>
                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                      <i class="fa fa-angle-down"></i>
                    </button>
                  </div>
                  <div class="mobile-links__item-sub-links" data-collapse-content>
                    <ul class="mobile-links mobile-links--level--2">
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="product.html" class="mobile-links__item-link">Product</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="product-alt.html" class="mobile-links__item-link">Product Alt</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="product-sidebar.html" class="mobile-links__item-link">Product Sidebar</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="cart.html" class="mobile-links__item-link">Cart</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="cart-empty.html" class="mobile-links__item-link">Cart Empty</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="checkout.html" class="mobile-links__item-link">Checkout</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="order-success.html" class="mobile-links__item-link">Order Success</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="wishlist.html" class="mobile-links__item-link">Wishlist</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="compare.html" class="mobile-links__item-link">Compare</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="track-order.html" class="mobile-links__item-link">Track Order</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="account-login.html" class="mobile-links__item-link">Account</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-login.html" class="mobile-links__item-link">Login</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-dashboard.html" class="mobile-links__item-link">Dashboard</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-profile.html" class="mobile-links__item-link">Edit Profile</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-orders.html" class="mobile-links__item-link">Order History</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-order-details.html" class="mobile-links__item-link">Order Details</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-addresses.html" class="mobile-links__item-link">Address Book</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-edit-address.html" class="mobile-links__item-link">Edit Address</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-password.html" class="mobile-links__item-link">Change Password</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="blog-classic.html" class="mobile-links__item-link">Blog</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="blog-list.html" class="mobile-links__item-link">Blog List</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="post.html" class="mobile-links__item-link">Post Page</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="#" class="mobile-links__item-link">Pages</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="about-us.html" class="mobile-links__item-link">About Us</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="contact.html" class="mobile-links__item-link">Contact Us</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="contact-us-alt.html" class="mobile-links__item-link">Contact Us Alt</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="404.html" class="mobile-links__item-link">404</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="terms-and-conditions.html" class="mobile-links__item-link">Terms And Conditions</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="faq.html" class="mobile-links__item-link">FAQ</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="components.html" class="mobile-links__item-link">Components</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="typography.html" class="mobile-links__item-link">Typography</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a data-collapse-trigger class="mobile-links__item-link">Currency</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">€ Euro</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">£ Pound Sterling</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">Rs US Dollar</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">₽ Russian Ruble</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a data-collapse-trigger class="mobile-links__item-link">Language</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">English</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">French</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">German</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">Russian</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">Italian</a>
                  </div>
                </li>
              </ul>
            </div>
          </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>