# EmployeeGradingSystem
EGS V1.0
MU Third year mini project
>>>>>> 
Databases included (import the 2 .sql files)
>>>>>>>>
copy all items in folder named "e" to htdocs.

>>>>>> Implemented using HTML, CSS, PHP.

Table of Contents
1.	Introduction
1.1	Purpose
1.2	Intended Audience & Reading Suggestions
1.3	Product Scope
1.4	References

2.	Overall Description
2.1	Product Perspective
2.2	Product Function
2.3	User Classes & Characteristics
2.4	Operating Environment
2.5	Design & Implementation Constraints

3.	External  Interface Requirements
3.1	User Interfaces
3.2	Software Interfaces

4.	System Interface
4.1	System Feature(Grade Allocation)

5.	Other Non-functional Requirements
5.1	Performance Requirements
5.2	Software Quality Attribute
5.3	Business Rules

Appendix A: Glossary
Appendix B: Analysis Models


1.	Introduction:

1.1	Purpose:
       Our proposed system mentions that the performance of the employee is based on performance in field.  Our project is for sales factor of employees.  Performances of the employees are calculated per month.  If the personality traits of the employees match their best performance grades of the company, then that employee will get a hike & will also starve to provide more productivity for the company for his better pay.

1.2	Intended Audience & Reading Suggestions:
       Our product is basically intended to target the companies who have the custom of selling products through salesman which have a particular target of selling products.  It is suggestions, that any type of reader can read this document in the given original sequence.

1.3	Project Scope:
      This product has a very wide scope ranging from small scale business to large firms in order to track the performance of the salesperson (employee).

1.4	References:
                              For the designing & creation of this document, we have referred the standard SRS published by IEEE.


2.	Overall Description:

2.1	Product Perspective:
        The productivity & profitability increase of a company depends on the performance of the employees.  In existing system, the employees’ behaviors are monitored by their superiors, so that employees perform well in their tasks.  Thus, this module is being made by us.

2.2	Product Functions:
        The primary functions of the product are to hold-
•	Calculate grade of employee based on performance percentage.
•	Keep a track of units sold to the customer by employee.

2.3	User Classes & Characteristics:
  There are 3 classes – Employee, Customer and Product
      Employee	Customer	Product
      Emp_id	Cust_name	Product_id
      Emp_name	Cust_contact	Units
      Emp_contact		date
      DOJ		
      Allocated_target		
      Achieved target		
      Performance %		
      Grade
      
2.4	Operating Environment:
       This is the employee grading system (EGS) version 1.0 

2.5	Design  & Implementation Constraints:
       The software will be open source & hence will have no EULA (End User License Agreement), as this software can be modified by everyone & is also available for further up gradation.  Maintenance responsibility of the software lies on the customer, also, for further help; the customer cannot contact the developers.  Support can be demanded but developers aren’t bound to answer them.  

3.	External Interface Requirements:

3.1	User Interfaces:
      The User Interface will be console based.  Tomcat Apache will be used for database connectivity.

3.2	Software Interfaces:
•	Xampp control panel version 3.2.2
•	Apache server
•	Mysql database

4.	System Features:

4.1	Grade Allocation:
          A grade will be allocated to the employee based on the achieved target and the provided target to him/her based on the percentage performance.


5.	Other Non-functional Requirements:

5.1	Performance Requirements:
              The product software is expected to work for about 8-10 hours (the standard office timing) with a hassle free performance irrelevant of Operating System and processor demand.

5.2	Software Quality Attributes:
              The software will be adaptable, available for free, flexible, portable, robust and maintainable.  Anyone having basic knowledge of the company will be able to operate it.

5.3	Business Rules:
•	Tampering of records & its knowledge to the superiors can lead to employees’ dismissal.
•	False information, redundant information should not be feeded to the system.
