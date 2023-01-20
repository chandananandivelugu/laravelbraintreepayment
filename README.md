# laravelbraintreepayment
Braintree payment gateway integration in laravel by implementing subscription methods

This application is aimed at providing stats to twitch streamers and more detailed analytics if they are subscribed to the service. They will log into your application using your preferred login system.


Stats page should have an option for users to subscribe to the service. There should be at least one monthly and one yearly plan.


Once subscribed it should reveal additional metrics in the stats page.


You do not need to show any real stats/analytics. Please use placeholders.


Users should be able to manage their subscription through the app. They should have the option to cancel their subscription.


Subscription system with automatic rebilling must be implemented through Braintree and should support credit card + paypal options at the least. 



DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=subscription
DB_USERNAME=root
DB_PASSWORD=root

please replace with your keys
BRAINTREE_ENV=sandbox
BRAINTREE_MERCHANT_ID=xxxxxxxx
BRAINTREE_PUBLIC_KEY=xxxxxxxx
BRAINTREE_PRIVATE_KEY=xxxxxxxxx

Demo Link : https://watch.screencastify.com/v/Hj8XkzJuAEfBzGRNgwCV
