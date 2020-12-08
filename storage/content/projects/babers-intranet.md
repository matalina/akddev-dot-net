---
title: Baber's Inc. Intranet
version: 4
url: 
repo: 
terms:
    - Laravel
    - Bootstrap
    - Vue
description: Rewrite and combine all previous intranet incarnations and separate the distinct companies while maintaining a single mega repo.
---

## Project Brief

This project was the bulk of what I managed for the timeI was with Baber's Inc.  It grew as business needs changed, and peices came and went as needed. The purpose of the intranet was a place to store all relavent reports, and modules that helped stores and locations preform their duties with efficiency.

This project has undergone three major revisions.

The first version I wrote was based on CodeIngitor 2.  Below is a list of modules created.

- Key Metric reports
- Inventory Ordering System
- Credit Card Reconciliation/Expense reports
- Create document location sharing system
- Commissions/Bonus System
- Field Receipt Book management system
- RAL check printing (Early refund checks/loans for Taxes)
- Project management system for Construction Crew
- Module for an Exchange Lease program to augment the third party POS
- Various Marketing Campaing manager for babers.com website
- Many reports

Version 2 of the Intranet was created in Laravel 4 and has since been upgraded and is currently running 7.0 at time of writing this. 

- A petty cash system
- Digital uploads of all signed agreements
- Customer Reward program interfaces for internal/external - first
- Rewrote Commissions interface with new changes
- Upload daily work packet interface
- Rewrote inventory ordering interface
- Rewrote Exchange Lease program interface
- Created Rental Property management interface

Version 3 of the intranet was created in Laravel with a modular approach to systems when the company decided to separate individual companes into their own entites.  The entire system was rewritten in Laravel and Vue under this modualar approach that allows the configuration and module loaded to be domain specific.

- Various reports were rewritten to run in  much faster multi call approach for long running report generation of key metrics- 
- Customer Reward programs were rewritten in a reusuable internal api
- Commissions system was written to enable faster loading of individual sales
- Credit Card/Expene Report was rewritten to fix bugs and increase performance as well as add third party integration into Accounting software
- Daily Packet submissions allow for finer control by Home Office and removes the user errors of invalid dates by users
- Refined the Document system to upload any type of file and allow for cleaner organization and multiple uploads
- Rewrote field book interface
- Rewrote the inventory ordering system to make it more user friendly and incorporate changing requirements by the company
- Petty Cash system rewritten
- Rewrote marketing campaign interface
- Rewrote signed agreement uploads 





