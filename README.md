# Mage Unconference End-2-End Example

This repository holds the results of the live coding session at the Mage Unconference 2025 in Utrecht. The goal was to have end 2 end tests running on each commit that gets pushed to this repository.

The test itself is a very simple one. It opens the Joust Duffle Bag product page, adds the product to the cart and checks if the cart contains the product.

# Setting up the pipeline

Before we can actually run the tests, we need a working Magento 2 installation. With a database, (elastic|open)search, and a webserver. You can set this all up manually, but it make maintenance harder and brittle. My main tool here is DDEV. DDEV is a tool that allows you to dockerize your project. It allows you to add components if you need to, like Redis, Varnish, or RabbitMQ. 

The great thing about DDEV is that it has a GitHub Action available that sets up the environment for you. You can find the action [here](https://github.com/ddev/github-action-setup-ddev). For DDEV to know what to do and to install, I've committed the `.ddev` folder to this repository.

# Database fixtures

For the tests to run, we need a database. Normally I would set up a database dump that runs on production every day, whenever possible. This dump is a stripped or anonymized version of the production database. This is then uploaded to an S3 bucket or similar, and downloaded by the GitHub Action. In this case, for the sake of having an example, I have created a dump of my database and committed it to the repository.

# Want to have this on your project?

I run a service called [MageTested](https://www.magetested.com) that helps you set up your CI/CD pipeline for Magento 2 projects. If you want to have this on your project, please reach out to me via [mailto:welcome@magetested.com](welcome@magetested.com), or the contact form on the MageTested website.
