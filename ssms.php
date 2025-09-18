CREATE TABLE BloodDonors (
    ID INT IDENTITY(1,1) PRIMARY KEY,
    DonorName NVARCHAR(100) NOT NULL,
    Age INT NOT NULL,
    Place NVARCHAR(100),
    MobileNumber VARCHAR(15),
    BloodGroup VARCHAR(10),
    LastDonationDate DATE,
    SubmissionDate DATETIME DEFAULT GETDATE()
);
