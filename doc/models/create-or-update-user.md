
# Create or Update User

## Structure

`CreateOrUpdateUser`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getCurrency(): ?string | setCurrency(?string currency): void |
| `programUserId` | `?string` | Optional | [Program identifier](#/rest/models/structures/program-user-id) for the user<br><br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `100` | getProgramUserId(): ?string | setProgramUserId(?string programUserId): void |
| `email` | `?string` | Optional | Contact [email address](#/rest/models/structures/email-address) for the user account for the user account<br><br>**Constraints**: *Minimum Length*: `8`, *Maximum Length*: `100`, *Pattern*: `^.+@.+\..+` | getEmail(): ?string | setEmail(?string email): void |
| `firstName` | `?string` | Optional | First name<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `100` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | Last name<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `100` | getLastName(): ?string | setLastName(?string lastName): void |
| `dateOfBirth` | `?DateTime` | Optional | - | getDateOfBirth(): ?\DateTime | setDateOfBirth(?\DateTime dateOfBirth): void |
| `taxResidentStatus` | [`?string(TaxResidentStatuses)`](../../doc/models/tax-resident-statuses.md) | Optional | Tax [resident status type](#/rest/models/structures/tax-resident-status) | getTaxResidentStatus(): ?string | setTaxResidentStatus(?string taxResidentStatus): void |
| `phoneNumber` | `?string` | Optional | - | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `mobileNumber` | `?string` | Optional | - | getMobileNumber(): ?string | setMobileNumber(?string mobileNumber): void |
| `phoneNumberCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getPhoneNumberCountry(): ?string | setPhoneNumberCountry(?string phoneNumberCountry): void |
| `mobileNumberCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getMobileNumberCountry(): ?string | setMobileNumberCountry(?string mobileNumberCountry): void |
| `addressLine1` | `?string` | Optional | Address Line 1<br><br>**Constraints**: *Maximum Length*: `255` | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressLine3` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getAddressLine3(): ?string | setAddressLine3(?string addressLine3): void |
| `city` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getCity(): ?string | setCity(?string city): void |
| `region` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getRegion(): ?string | setRegion(?string region): void |
| `country` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getCountry(): ?string | setCountry(?string country): void |
| `postalCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `50` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `gender` | [`?string(Genders)`](../../doc/models/genders.md) | Optional | [Gender](#/rest/models/structures/gender) as a user identifies | getGender(): ?string | setGender(?string gender): void |
| `userType` | [`?string(UserTypes)`](../../doc/models/user-types.md) | Optional | Account holder's profile [type](#/rest/models/structures/user-type) | getUserType(): ?string | setUserType(?string userType): void |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Optional | The [Language](#/rest/models/structures/language) type in IETF's BCP 47 format | getLanguage(): ?string | setLanguage(?string language): void |
| `countryOfBirth` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getCountryOfBirth(): ?string | setCountryOfBirth(?string countryOfBirth): void |
| `countryOfNationality` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getCountryOfNationality(): ?string | setCountryOfNationality(?string countryOfNationality): void |
| `businessContactRole` | [`?string(BusinessContactRoles)`](../../doc/models/business-contact-roles.md) | Optional | Business contact role<br><br>**Constraints**: *Maximum Length*: `20` | getBusinessContactRole(): ?string | setBusinessContactRole(?string businessContactRole): void |
| `governmentIdType` | [`?string(GovernmentIds)`](../../doc/models/government-ids.md) | Optional | Indicates the type of ID submitted for user verification purposes. | getGovernmentIdType(): ?string | setGovernmentIdType(?string governmentIdType): void |
| `governmentId` | `?string` | Optional | **Constraints**: *Maximum Length*: `20` | getGovernmentId(): ?string | setGovernmentId(?string governmentId): void |
| `occupationTitle` | `?string` | Optional | **Constraints**: *Maximum Length*: `20` | getOccupationTitle(): ?string | setOccupationTitle(?string occupationTitle): void |
| `occupationType` | [`?string(Occupations)`](../../doc/models/occupations.md) | Optional | [Type of occupation](#/rest/models/structures/occupation) for the user | getOccupationType(): ?string | setOccupationType(?string occupationType): void |
| `mailingAddressLine1` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getMailingAddressLine1(): ?string | setMailingAddressLine1(?string mailingAddressLine1): void |
| `mailingAddressLine2` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getMailingAddressLine2(): ?string | setMailingAddressLine2(?string mailingAddressLine2): void |
| `mailingAddressLine3` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getMailingAddressLine3(): ?string | setMailingAddressLine3(?string mailingAddressLine3): void |
| `mailingCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getMailingCountry(): ?string | setMailingCountry(?string mailingCountry): void |
| `mailingCity` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getMailingCity(): ?string | setMailingCity(?string mailingCity): void |
| `mailingRegion` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getMailingRegion(): ?string | setMailingRegion(?string mailingRegion): void |
| `mailingPostalCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `3` | getMailingPostalCode(): ?string | setMailingPostalCode(?string mailingPostalCode): void |
| `businessAddressLine1` | `?string` | Optional | Business address line 1<br><br>**Constraints**: *Maximum Length*: `255` | getBusinessAddressLine1(): ?string | setBusinessAddressLine1(?string businessAddressLine1): void |
| `businessAddressLine2` | `?string` | Optional | Business address line 2<br><br>**Constraints**: *Maximum Length*: `255` | getBusinessAddressLine2(): ?string | setBusinessAddressLine2(?string businessAddressLine2): void |
| `businessAddressLine3` | `?string` | Optional | Business address line 3<br><br>**Constraints**: *Maximum Length*: `255` | getBusinessAddressLine3(): ?string | setBusinessAddressLine3(?string businessAddressLine3): void |
| `businessCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getBusinessCountry(): ?string | setBusinessCountry(?string businessCountry): void |
| `businessCity` | `?string` | Optional | Business city<br><br>**Constraints**: *Maximum Length*: `50` | getBusinessCity(): ?string | setBusinessCity(?string businessCity): void |
| `businessRegion` | `?string` | Optional | Region that the business is based out of | getBusinessRegion(): ?string | setBusinessRegion(?string businessRegion): void |
| `businessPostalCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `50` | getBusinessPostalCode(): ?string | setBusinessPostalCode(?string businessPostalCode): void |
| `premiseNumber` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getPremiseNumber(): ?string | setPremiseNumber(?string premiseNumber): void |
| `programToken` | `?string` | Optional | Auto-generated unique identifier representing a program, prefixed with prog-<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^prog-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` | getProgramToken(): ?string | setProgramToken(?string programToken): void |
| `primaryUserToken` | `?string` | Optional | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` | getPrimaryUserToken(): ?string | setPrimaryUserToken(?string primaryUserToken): void |

## Example (as JSON)

```json
{
  "currency": "USD",
  "programUserId": "pdekt",
  "email": "john.doe@email.com",
  "firstName": "John",
  "lastName": "Doe",
  "dateOfBirth": "2026-02-07T22:23:10.0141433Z",
  "taxResidentStatus": "NO",
  "phoneNumber": "+12345678901",
  "mobileNumber": "+12345678901",
  "phoneNumberCountry": "US",
  "mobileNumberCountry": "US",
  "addressLine1": "string",
  "addressLine2": "string",
  "addressLine3": "string",
  "city": "string",
  "region": "string",
  "country": "US",
  "postalCode": "uuk",
  "gender": "FEMALE",
  "userType": "BUSINESS",
  "language": "en-US",
  "countryOfBirth": "US",
  "countryOfNationality": "US",
  "businessContactRole": "MANAGER",
  "governmentIdType": "CURP",
  "governmentId": "string",
  "occupationTitle": "string",
  "occupationType": "ARTS",
  "mailingAddressLine1": "string",
  "mailingAddressLine2": "string",
  "mailingAddressLine3": "string",
  "mailingcountry": "US",
  "mailingCity": "string",
  "mailingRegion": "string",
  "mailingPostalCode": "jgl",
  "businessAddressLine1": "string",
  "businessAddressLine2": "string",
  "businessAddressLine3": "string",
  "businesscountry": "US",
  "businessCity": "string",
  "businessRegion": "string",
  "businessPostalCode": "uuk",
  "premiseNumber": "string",
  "programToken": "prog-6a272eca-9487-d83a-c9e4-8df8c9a7f6eb",
  "primaryUserToken": "user-2bbfc967-d12e-4647-a887-d905172fb4bc"
}
```

