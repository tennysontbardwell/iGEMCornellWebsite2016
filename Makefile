.PHONY: build run

deploy:
	aws s3 sync ./src/ "s3://igem-2015-archive/"
	aws cloudfront create-invalidation --distribution-id E1422HCPKLP0CP --paths "/*"
