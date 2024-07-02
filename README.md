Project's Title - Internet Banking (E-BANKING)

Project link - https://ebankingsystem.skirfan.com/

portfolio website - www.skirfan.com

Project Description:
This project is aimed at developing an online banking system that is of importance to any
bank. The E-banking is an Intranet based application that can be accessed any person.
This system can be used to create a new bank account/to know about a bank/login a exist
account etc. Persons logging should be able to upload their details. Persons logging in
may also access/search any information (Ex. Account details, truncation history, photo,
account number).
Operational Structure:
The basic entity for explaining all operations in the bank is the customer. A
Customer may have one or more account in the Bank spread across one or more
branches. Customers open Bank Account with a specified opening balance and
thereafter may either deposit funds into the account or withdraw amount from
them. The transaction involving the opening of accounts, assignments of Account
Numbers, Deposit and Withdrawal transactions etc. are all carried out by the Core
Banking solution already implemented in the bank. At present, all these core
transactions are carried out directly in the bank and do not fall within the preview
of E-Banking.
One of the most frequent requests for information by customers is querying
on Bank Balance and information regarding specific transaction carried out in the
bank. It was decided to make this an E-Banking service to customer.
Customer would often want to transfer funds from one account of theirs to
another. The Account Numbering scheme now uniquely identifies the Bank branch
to which the account belongs. Transfer of funds between accounts of the same
customer will now be facilitated through the E-Banking service.
 To ensure that customer is ensured of a high level of security, the Banking service
needs to provide Customer with a unique Personal Identification password which
can be changed from time to time. All services are accessible only on correct
password verification.
The customer may also look for information on Interest rates on Fixed Term
Deposits, which often change from time to time.
Solution Requirements:
Simulating the Core Banking solution, a Test application needs to be built
which contain the central Banking database. This solution should facilitate the
following:
• Registering of new customer.
• Deposit Transaction.
• Withdrawal transaction.
• Maintaining security password information on customer.
• Maintaining information on Bank branches.
• Recording and Sending status.
These transactions are done offline and these applications exist solely for the
purpose of providing a simulated back-end for the EBanking service. In a real
banking situation, the E-Banking front-end will interface with a core Banking solution
through middle-ware.

 Adequate data need to be entered into the Back-end application database so that
the E-Banking solution can be comprehensively tested out.
The Business rules for the back-end are the following:
1. A customer may have multiple accounts opened across several branches.
2. While opening an opening balances amount is entered. The opening balances
transaction date is the date of opening of the account.
3. A deposit transaction should correctly identify the account number, the
amount, Cash details, date and time of transaction. For the sake of simplicity,
we will assume that no deposits bounce and the amount updates the balances
regardless of whether the instruments are cash .
4. A withdrawal transaction is carried out in a valid customer account Details
of date, time, instruments details (Cash) and amount will be provided.
Ensure that the amount dose not exceed the current balance in the specified
account.
5. Current Balance = Opening Balance + (Sum of all Deposits) – (Sum of all
withdrawals) as on date.
E-Banking Solution:
It is assumed that all customers are provided with a valid User-ID and
password. The password can be changed through the Change Password option.
The Home can for the E-Banking service asks for the Customer-ID and Password.
The correctness of the details needs to be verified before granting any further access
to the customer. On successful validation, the Customer is taken to the summary
page where all the services provided to the customer are outlined in a table. Against
each of it, the customer enjoys the service.
The customer may to have Transaction Details in a specific account. For this purpose,
the Customer needs to be provided with an option to specify a date range. On
submitting the new date range, the page will refresh with transaction details for the
specified period, which should include the following:
Opening balance (as of start of period)
Deposit and withdrawals sorted on Date + time
Closing balance in the account (at the end of the period)
The customer should be able to Print-Friendly version of the page, which can
be printed without excessive graphics.
In the Customer Summary Page, an option is provide for Fund Transfer. On selecting
of this option, a transaction page is displayed where the customer will enter source
account and destination accounts and amount to be transferred. Obviously, this
transaction is possible only if the customer has more than one account. The Amount
to be transferred from the source account should not exceed the current balance in
the account. This transaction should update the Core Banking database.
