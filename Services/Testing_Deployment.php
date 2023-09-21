<?php 
include "../app/header.php";
?>
<style>
    .row {
  max-width: 100%;
}

@media (min-width:1200px) and (max-width:991px) {
     .centered .col-sm-2 {
         width: 13.66666% !important
     }
 }

 @media (min-width:992px) and (max-width:767px) {
     .centered .col-sm-2 {
         width: 12.666667% !important
     }
 }

 @media (min-width:768px) {
     .centered .col-sm-2 {
         width: 13.666667% !important
     }
 }
</style>
<section id="banner" style="background-image:url(../assect/upload/Service/Testing_Deployment.webp);">
    <h3 class="line-1 text-white">Testing and Deployment</h3>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <img src="../assect/upload/Service/testing and deployment.png" alt="image" style="width:100%; height:380px;">
            </div>
            <div class="col-lg-6">
                <p class="pt-3 heading_p"> The process of data migration in Salesforce pertains to the movement of data from one Salesforce instance 
                    to another. This may be required when a business upgrades from an older version of Salesforce to a more recent one, 
                    or when consolidating several Salesforce instances into a single one.</p>
                 <p class="pt-3 heading_p">
                 To ensure successful testing and deployment, developers typically use various tools and techniques, such as automated 
                 testing, continuous integration, and version control. These processes help identify and fix any issues before releasing 
                 the application to end-users. Additionally, developers must follow best practices and adhere to Salesforce's security and 
                 compliance guidelines to ensure data privacy and protection.
                 </p>
                
            </div>
            <h2 class="pt-1 heading_titel"> Why Do We Need Salesforce Testing? </h2>
            <p class="pt-3 heading_p"> The Salesforce platform is extremely adaptable and inclusive, allowing businesses to personalize it to suit their individual needs with ease. 
                It offers a diverse range of resources, tools, and an extensive third-party integration ecosystem through the AppExchange marketplace, all of which can be utilized to customize the platform. 
                However, given the complexity of the system, conflicts may occur. </p>
            <p class="pt-3 heading_p"> When upgrading Salesforce to a newer version, it can conflict with the existing customizations </p>
            <p class="pt-6 "> New external systems, APIs, and integrations may clash with already installed integrations </p>
            <p class="pt-6 "> New data validation rules can be too strict or inconsistent with existing data, causing issues with data entry and updates </p>
            <p class="pt-6 "> Heavy data processing can impact performance </p>
            <p class="pt-6 "> Customizations that modify user access controls can lead to security issues </p>
            <p class="pt-3 heading_p"> By conducting comprehensive testing, the QA team can identify and resolve areas of conflict in a timely manner prior to release, thereby minimizing the adverse effects of bugs on the company's profits. Along with examining customizations, Salesforce testing offers the same advantages as performing typical software testing. </p>
            <p class="pt-6 "> Ensure system reliability and stability </p>
            <p class="pt-6 "> Minimize risk of system failures, data loss, or performance issues </p>
            <p class="pt-6 "> Maintain data integrity in the system </p>
            <p class="pt-6 "> Improve user experience by identifying and eliminating friction </p>
            <p class="pt-6 "> Ensure compliance and security </p>
            </div>
            <h2 class="pt-1 heading_titel"> Salesforce CI/CD using Azure DevOps </h2>
            <p class="pt-3 heading_p"> Getting the Fundamentals right Before we dive in to the setup and configurations of the DevOps process, 
                we should have a clear understanding of what Continuos Integration (CI) is and what Continuous Delivery (CD) Is.</p>
            <p class="pt-6 heading_p"> <b>Continuous Integration (CI)</b> is not a tool. It is a practice. </p>
            <p class="pt-6 "> It is a practice for integrating the work of all developers into a common codebase. </p>
            <p class="pt-6 "> It involves running tests automatically when code is changed. </p>
            <p class="pt-6 "> It also involves detecting broken build & tests in few seconds to keep process flowing. </p>
            <p class="pt-6 "> <b> Continuous Delivery (CD)</b> is not a tool. It is a practice. </p>
            <p class="pt-6 "> It also involves propagating changes from PROD to DEV to keep orgs in sync. </p>
            <p class="pt-6 "> <b>Understanding the current Development Model</b> As of today, Salesforce recommends two development models. </p>
            <p class="pt-6 "> Package Development Model </p>
            <p class="pt-6 "> Org Development Model </p>
            <p class="pt-3 "> We need to set the deployment strategy in alignment with the development models. 
                In Package Development Model, Every artefact is bundled into a package and deployed separately 
                Package should be self-sufficient & isolated Requires the organization to have adherence to architectural 
                principles, existence of frameworks, horizontal & vertically sliced concerns addressed Even though Package 
                Development Model appears close to what we want to have, do not force yourself into package development if 
                your organizational practices are not package based. Package Development Model would vision to release features 
                as a package which is vertically and horizontally sliced. Any impacts that occur would only happen in that package/app 
                and it would not affect the other packages/apps. Getting to the package development model maturity itself is a huge effort on its own. </p>
            <p class="pt-6 "> In Org Development Model, </p>
            <p class="pt-6 "> Artefacts are bundled as functionalities/features for deployment (like a changeset bundle) </p>
            <p class="pt-6 "> Deployments are org based and not package based </p>
            <p class="pt-6 "> Org Development Model is a common development model that most organizations follow. Every feature developed would be bundled into a changeset and be deployed to an org. Post deployment, QA would do a smoke testing and a regression testing just to ensure nothing in the org is impacted. </p>
            <p class="pt-6 "> Now, let’s define the problem statement. </p>
            <p class="pt-6 "> ABC Company uses Salesforce CRM for their business. They have a development team that develops functionalities as per business request in a Developer Sandbox. The team lead/team manager/deployment manager collects the list of items developed for each functionality from the developer, prepares changeset and deploys to QA Sandbox when it is ready for QA testing. After QA testing is pass, those functionalities are queued for PROD deployment which happens once every 2 weeks. The team lead/team manager/deployment manager again creates the changeset for PROD deployment and executes them every 2 weeks and initimates the organization stakeholders. For your information, they use Azure repositories for code management for their website development team. </p>
            <p class="pt-6 heading_titel"> Key items to consider for deployment strategy </p>
            <p class="pt-6 "> It is clear that ABC company uses Org Development Model. So, we need to understand that anything related to package development model (even though it is fancy and attractive) should not be forced. </p>
            <p class="pt-6 "> They already use Azure repositories for version control needs. So, it is worth using Azure repo for SF code management. </p>
            <p class="pt-6 "> Azure has out of the box features for Devops which is called Azure DevOps services. This can be used as a tool for CI/CD. </p>
            <p class="pt-6 heading_titel"> Things that we need before we start the DevOps configurations </p>
            <p class="pt-6 "> Salesforce Developer Org [if you don’t have one, signup and get a free personal dev org] </p>
            <p class="pt-6 "> Developer Azure account [just go to dev.azure.com and register with your microsoft personal email address] </p>
            <p class="pt-6 "> Salesforce CLI installed locally </p>
            <p class="pt-6 "> Visual Studio Code installed locally with “Salesforce Extension Pack” installed. </p>
            <p class="pt-6 "> Git (either via npm or as installer) </p>

            <h2 class="pt-6 id="step-4-getting-the-sf-org-codebase-to-push-to-azure-git-repo">Step 4. Getting the SF Org codebase to push to Azure Git repo</h2>
            <p>In this step, we will pull the codebase from salesforce and organize it in the way we want to version control it. Then, we will commit 
                this code to the Azure Git repo we created in Step 3.</p>
            <ol>
            <li>Create a folder named “Projects” in your local machine</li>
            <li>Open the terminal/command prompt from this “Projects” folder.</li>
            <li>Execute the following command for creating an empty SFDX project locally
            <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code> sfdx force:project:create <span class="nt">--projectname</span> MyPersonalDevOrg
            </code></pre></div>    </div>
            </li>
            <li>cd into the newly created project folder
            <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code> <span class="nb">cd </span>MyPersonalDevOrg
            </code></pre></div>    </div>
            </li>
            <li>Create a folder named “manifest”
            <div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code> mkdir manifest
            </code></pre></div>    </div>
            </li>
            <li>Type the following command to open the project in VS Code.
            <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code> code <span class="nb">.</span>
            </code></pre></div>    </div>
            </li>
            <li>Create a file named “package.xml” inside the manifest folder.</li>
            <li>Open the “package.xml” file and paste the following contents. Essentially, we are saying that we are interested in Apex Classes, Apex Triggers, Visualforce Pages and Custom Objects only. You can add more metadata to “package,xml” file as per your needs.
            <div class="language-xml highlighter-rouge"><div class="highlight"><pre class="highlight"><code> <span class="cp">&lt;?xml version="1.0" encoding="UTF-8" standalone="yes"?&gt;</span>
            <span class="nt">&lt;Package</span> <span class="na">xmlns=</span><span class="s">"http://soap.sforce.com/2006/04/metadata"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;types&gt;</span>
            <span class="nt">&lt;members&gt;</span>*<span class="nt">&lt;/members&gt;</span>
            <span class="nt">&lt;name&gt;</span>ApexClass<span class="nt">&lt;/name&gt;</span>
            <span class="nt">&lt;/types&gt;</span>
            <span class="nt">&lt;types&gt;</span>
            <span class="nt">&lt;members&gt;</span>*<span class="nt">&lt;/members&gt;</span>
            <span class="nt">&lt;name&gt;</span>ApexTrigger<span class="nt">&lt;/name&gt;</span>
            <span class="nt">&lt;/types&gt;</span>
            <span class="nt">&lt;types&gt;</span>
            <span class="nt">&lt;members&gt;</span>*<span class="nt">&lt;/members&gt;</span>
            <span class="nt">&lt;name&gt;</span>ApexPage<span class="nt">&lt;/name&gt;</span>
            <span class="nt">&lt;/types&gt;</span>
            <span class="nt">&lt;types&gt;</span>
            <span class="nt">&lt;members&gt;</span>*<span class="nt">&lt;/members&gt;</span>
            <span class="nt">&lt;name&gt;</span>CustomObject<span class="nt">&lt;/name&gt;</span>
            <span class="nt">&lt;/types&gt;</span>
            <span class="nt">&lt;version&gt;</span>44.0<span class="nt">&lt;/version&gt;</span>
            <span class="nt">&lt;/Package&gt;</span>
           </code></pre></div>    </div>
           </li>
           <li>Create a folder named “buildfiles” using the following command
           <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code> <span class="nb">mkdir </span>buildfiles
           </code></pre></div>    </div>
           </li>
           <li>Paste the <strong>server.key</strong> inside the buildfiles folder</li>
           <li>Execute the following command in terminal/command prompt. This will retrieve all the metadata from your SF org to the project folder in metadata format. Please do replace the xxx@xxx.com to your salesforce org username.
           <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code> sfdx force:mdapi:retrieve <span class="nt">-r</span> retrieved <span class="nt">-k</span> manifest/package.xml <span class="nt">-w</span> 10 <span class="nt">-u</span> xxx@xxx.com
           </code></pre></div>    </div>
           </li>
           <li>Unzip the retrieved metadata zip file into a folder named “retrieved”. (<strong>Note</strong> that this unzip command may not work in Windows OS. So manually unzip.)
           <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>unzip retrieved/unpackaged.zip <span class="nt">-d</span> retrieved
           </code></pre></div>    </div>
           </li>
           <li>Delete the zip file
           <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nb">rm </span>retrieved/unpackaged.zip
           </code></pre></div>    </div>
           </li>
           <li>Convert the unzipped “retrieved” folder contents from metadata format to SFDX format. This will add the metadata into the SFDX project structure under the folder “force-app”
           <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>sfdx force:mdapi:convert <span class="nt">-r</span> retrieved/unpackaged <span class="nt">-d</span> force-app
           </code></pre></div>    </div>
           </li>
           <li>Execute the following command in terminal/command prompt to initialize the project folder for git tracking.
           <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>git init
           </code></pre></div>    </div>
        </li>
        <li>Switch to VS Code. In .gitignore file, add the following lines to the last of the file. We are telling git that do not track “retrieved” and “toDeploy” folders as they are working directories.
        <div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>retrieved/
        toDeploy/
        </code></pre></div>    </div>
        </li>
        <li>Add the Git user configurations. Execute the following commands in the terminal/command prompt. Replace “xxx@xxx.com” with your dev.azure.com login email address. Replace “testusername” with the username you had got in STEP 3 -&gt; Point number 5.
        <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>git config user.email <span class="s2">"xxx@xxx.com"</span>
        git config user.name <span class="s2">"testusername"</span>
        </code></pre></div>    </div>
        </li>
        <li>Add all the project files to git tracking by executing the following command in terminal/command prompt.
        <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>git add <span class="nb">.</span>
        </code></pre></div>    </div>
        </li>
        <li>Execute the following command in terminal/command prompt to commit the code.
        <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>git commit <span class="nt">-m</span> <span class="s2">"Initial Code"</span>
        </code></pre></div>    </div>
        </li>
        <li>Copy and execute the git remote command from the Azure Project’s -&gt; Repos page shown in the “Push an existing repository from command line” section. GIT_REPO_URL should be replaced with your azure git repo url.
        <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>git remote add origin GIT_REPO_URL
        </code></pre></div>    </div>
        </li>
        <li>Execute the following command in terminal/command prompt to push the local project codebase to the Azure Git Repo. This might ask for the password. Provide the password that we had got from STEP 3 -&gt; Point number 5.
        <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>git push <span class="nt">-u</span> origin master
        </code></pre></div>    </div>
        </li>
        <li>After the command executes, switch to Azure Git Repo open in browser and refresh the page. You should see the Salesforce Org codebase in the repo.</li>
        </ol>

        <h2 class="pt-6 id="step-5-creating-the-azure-pipeline-for-automated-build--deploy">Step 5. Creating the Azure Pipeline for automated build &amp; deploy</h2>
        <p>In this step, we will create the azure pipeline which will build, test and deploy the committed codebase from azure git repo to Salesforce Cloud. Here, we will use the latest SFDX CLI techniques to deploy instead of the old school ANT migration scripts.</p>

        <ol>
       <li>In the Azure Project page open in the browser, navigate to “Pipelines” tab.</li>
       <li>Click on “Create Pipeline”</li>
       <li>Choose “Azure Repos Git” for “Where is your code?”</li>
       <li>Choose “SF DevOps” project for “Select your repository”</li>
       <li>Choose “Starter Pipeline” for “Configure your pipeline”</li>
       <li>Overwrite the code shown in “Review your pipeline YAML” and paste the following code. (<strong>Note</strong>: a usual mistake that people do is to copy-paste the pipeline code and mess up the indentation of the yml code. If indentation is not right, you will have a tough time running the pipeline.)
       <div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code> # Starter pipeline
       # Start with a minimal pipeline that you can customize to build and deploy your code.
       # Add steps that build, run tests, deploy, and more:
       # https://aka.ms/yaml

       trigger:
       batch: "true"
       branches:
       include:
       - master
       paths:
       exclude:
       - README.md
       - azure-pipelines.yml
       pr:
       autoCancel: "true"
       branches:
       include:
       - master
       paths:
       exclude:
       - README.md
       jobs:
       - job: Deploy
       condition: and(succeeded(), eq(variables['Build.SourceBranch'], 'refs/heads/master'))
       steps:
        - task: UseNode@1
        - bash: 
         npm install sfdx-cli --global
          displayName: Install Salesforce CLI
          - bash: 
         sfdx force:auth:jwt:grant --clientid $(salesforceDevOrgClientId) --jwtkeyfile ./buildfiles/server.key --username $(salesforceDevOrgUserName) --instanceurl $(salesforceDevOrgInstanceURL) -a devOrg
          displayName: Authorize salesforce org
         - bash: 
         sfdx force:source:convert -r ./force-app -d ./toDeploy
         displayName: Convert to deploy source
         - bash: 
         sfdx force:mdapi:deploy -l RunLocalTests -c -d ./toDeploy -u devOrg -w 10
         displayName: Run validation on source code
         - bash: 
         sfdx force:mdapi:deploy -l RunLocalTests -d ./toDeploy -u devOrg -w 10
         displayName: Deploy source code to Dev Org
         </code></pre></div>    </div>

         <p><strong>Explanation of the pipeline code:</strong></p>

          <ul>
          <li>We define 1 job called “Deploy” with a set of steps/tasks.
        <ol>
          <li>Install SF CLI on the azure vm so that we can execute SFDX commands.</li>
          <li>Authorize the Dev Org and ensure that we can login using clientId, server.key and username</li>
          <li>Convert the SFDX code in “force-app” directory to metadata format for deployment</li>
          <li>Run a Validation using the converted code in metadata format using SFDX</li>
          <li>Deploy the converted code in metadata format using SFDX</li>
        </ol>
      </li>
    </ul>
  </li>
  <li>Click on the “Variables” button and create the following variables
    <ul>
      <li><strong>salesforceDevOrgClientId</strong> = paste the client id from the connected app we created in Step 2</li>
      <li><strong>salesforceDevOrgInstanceURL</strong> = https://login.salesforce.com</li>
      <li><strong>salesforceDevOrgUserName</strong> = type the username of your developer org</li>
    </ul>
  </li>
  <li>Click on “Save &amp; Run”. You will see the pipeline starting to run. You can click the build instance and see what the azure pipeline is doing while it is executing the commands.</li>
  <li>After the pipeline is executed, you can open the Salesforce Org in browser and navigate to Setup -&gt; Environments -&gt; Deploy -&gt; Deployment Status. Here, you will see a recent Deployment Validation Success &amp; a Deployment Success.</li>
  <li>Run the following command in terminal/command prompt to pull the pipeline yml file to vscode locally.
    <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>git pull origin master
</code></pre></div>    </div>
  </li>
</ol>

<p>This completes the setup of Azure DevOps pipeline for automating Salesforce deployments.</p>

<p>**From now on, you just need to **</p>
<ul>
  <li>open the project code in VS Code</li>
  <li>add/modify the code</li>
  <li>run the following commands to commit your code changes to azure git repo
    <div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>  git add <span class="nb">.</span>
  git commit <span class="nt">-m</span> <span class="s2">"commit message"</span>
  git push origin master
</code></pre></div>    </div>
  </li>
  <li>the azure pipeline will automatically detect that a commit was made and it will automatically run the azure pipeline to deploy the code.</li>
  <li>even if the pipeline succeeds or fails, you will get an email notification regarding the latest build status.</li>
</ul>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
<h2 class="text-center" style="color:#00A1E0;">Development Life Cycle</h2>
    <div class="container-fluid">
        <div id="process" class="row centered animated">
            <div class="col-sm-2 col-sm-offset-1 processBlock one">
                <div class="processDot">&nbsp;</div>
                <div class="processText text-start">Planning</div>
            </div>
            <div class="col-sm-2 processBlock two">
                <div class="processDot">&nbsp;</div>
                <div class="processText topProcess text-start">Define<br>Requirements</div>
            </div>
            <div class="col-sm-2 processBlock three">
                <div class="processDot">&nbsp;</div>
                <div class="processText text-start">Design & <br>Prototyping</div>
            </div>
            <div class="col-sm-2 processBlock four">
                <div class="processDot">&nbsp;</div>
                <div class="processText topProcess text-start">Software <br>Development</div>
            </div>
            <div class="col-sm-2 processBlock five">
                <div class="processDot">&nbsp;</div>
                <div class="processText text-start">Testing</div>
            </div>
            <div class="col-sm-2 processBlock six">
                <div class="processDot">&nbsp;</div>
                <div class="processText topProcess text-start">Deployment</div>
            </div>
            <div class="col-sm-2 processLast sevan">
                <div class="processDot lastDot">&nbsp;</div>
                <div class="processText text-start"><span>Operations</span> <span
                        class="text-center ">&</span><br>Maintenance</div>
            </div>
        </div>
    </div>
</section>


<section class="mt-5 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
            <h2 class="pt-5 heading_titel"> Types of Salesforce testing and deployment</h2>
            <div class="accordion mt-2 mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Unit Testing
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It involves testing individual components of a Salesforce application to ensure that they function as expected.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Integration Testing
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It verifies the interaction between different components of the Salesforce application and external systems.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Regression Testing
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It ensures that the changes made to the Salesforce environment do not negatively impact existing functionalities.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        User Acceptance Testing (UAT)
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It involves testing the changes made to the Salesforce environment from an end-user perspective to ensure that they meet their requirements.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        Performance Testing
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It tests the performance of the Salesforce application under various conditions to ensure that it can handle expected traffic.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        Continuous Integration and Continuous Deployment (CI/CD)
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It automates the testing and deployment process to enable faster and more frequent releases.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsaven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesaven" aria-expanded="false" aria-controls="collapsesaven">
                        Sandbox Testing
                        </button>
                    </h2>
                    <div id="collapsesaven" class="accordion-collapse collapse" aria-labelledby="headingsaven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It involves testing changes in a separate Salesforce environment to avoid impacting the production environment.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingeight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Production Deployment
                        </button>
                    </h2>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It is the process of releasing changes to the live Salesforce environment after successful testing and approval.
                        </div>
                    </div>
                </div>

            </div>
            </div>
            <div class="col-lg-5 text-center">
                <img src="../assect/upload/Service/gitForTestingImage.png" alt="git">
            </div>
        </div>
   

    </div>
</section>

<?php include "../app/footer.php"; ?>
