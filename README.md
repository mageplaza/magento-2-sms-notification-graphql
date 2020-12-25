# Magento 2 SMS Notification GraphQL/PWA

**Magento 2 SMS Notification GraphQL is now a part of the Mageplaza SMS Notification extension that adds GraphQL features. This supports PWA Studio.** 

[Mageplaza SMS Notification for Magento 2](https://www.mageplaza.com/magento-2-sms-notification/) is an effective tool that streamlines the communication between online stores and customers. It enables you to announce to your customers about anything via SMS which is faster and more convenient for both customers and store owners in the mobile environment. 

SMS is somehow a more effective way to transfer information than email. Research shows that SMS open rates are as high as 98%, compared to just 20% of all emails. So communicating with customers via SMS will bring online stores a higher opportunity of getting messages opened and responded. Also, Mageplaza SMS notifications integrate with leading SMS service providers, such as Amazon SNS and Twilio, which ensures that your SMS will be delivered to your customers at the right time with the right messages, and you also receive consistent update messages about your store. 

The extension enables you to automatically send SMS notifications to your customers in an instant manner according to their activities on your store, such as registering an account, placing an order, and more. Customers will consistently get information about successful ordering and related billing documents. You will also get SMS notifications about customers in a systmatic manner, such as daily, weekly, and monthly. These notifications are like overall reports on what customers have done on your website, so that they will be sent at the most appropriate time.

Additionally, there will be notifications if any error happens on your site so that you will know the situation timely and solve them right away. In this case, SMS notifications are more convenient than emails as you can check it on the way on your mobile phone and check the issues in a breeze. 

Mageplaza SMS Notification can effectively solve the problems of information transfer by emails as it reduces the unhappy experience with emails such as interruption delivery due to bad Internet connection or spam errors. The extension will streamline your store performance and increase customer satisfaction. 

## 1. How to install

Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-sms-notification-graphql
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

**Note:**
Magento 2 Sms Notification GraphQL requires installing [Mageplaza Sms Notification](https://www.mageplaza.com/magento-2-sms-notification/) in your Magento installation.

## 2. How to use

To perform GraphQL queries in Magento, please do the following requirements:

- Use Magento 2.3.x or higher. Set your site to [developer mode](https://www.mageplaza.com/devdocs/enable-disable-developer-mode-magento-2.html).
- Set GraphQL endpoint as `http://<magento2-server>/graphql` in url box, click **Set endpoint**. 
(e.g. `http://dev.site.com/graphql`)
- To view the queries that the **Mageplaza SMS Notification GraphQL** extension supports, you can look in `Docs > Query` in the right corner

## 3. Devdocs

- [Rest API & examples](https://documenter.getpostman.com/view/10589000/T1LPCRuN)
- [GraphQL & examples](https://documenter.getpostman.com/view/10589000/TVmFifTs)

## 4. Contribute to this module

Feel free to **Fork** and contribute to this module. 
You can create a pull request so we will merge your changes main branch.

## 5. Get Support

- Feel free to [contact us](https://www.mageplaza.com/contact.html) if you have any further questions.
- Like this project, Give us a **Star** ![star](https://i.imgur.com/S8e0ctO.png)
