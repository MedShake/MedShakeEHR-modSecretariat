default:
	rm -f MedShakeEHR-modSecretariat.zip SHA256SUMS
	zip -r MedShakeEHR-modSecretariat.zip . -x .git\* -x Makefile -x installer\*
	sha256sum -b MedShakeEHR-modSecretariat.zip > preSHA256SUMS
	head -c 64 preSHA256SUMS > SHA256SUMS
	rm -f preSHA256SUMS

clean:
	rm -f MedShakeEHR-modSecretariat.zip

