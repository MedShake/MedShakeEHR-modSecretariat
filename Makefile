default:
	zip -r MedShakeEHR-modSecretariat.zip . -x .git\* -x Makefile

clean:
	rm -f MedShakeEHR-modSecretariat.zip
